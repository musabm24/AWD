<p id="ajaxArticle"></p>


<h2><?= esc($title) ?></h2>

<?php if ($news_list !== []): ?>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

    <?php foreach ($news_list as $news_item): ?>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="<?= esc($news_item['image']) ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= esc($news_item['title']) ?></h5>
                    <p class="card-text"><?= esc($news_item['body']) ?></p>
                    <a class="btn btn-primary" href="https://mi-linux.wlv.ac.uk/~2378632/project-root2/public/news/<?= esc($news_item['slug'], 'url') ?>">View Car</a>
                    
                </div>
            </div>
        </div>
    <?php endforeach ?>
    </div>
    <a class="btn btn-primary" href="https://mi-linux.wlv.ac.uk/~2378632/project-root2/public/news/new">Add car</a>
<?php else: ?>

    <h3>No Cars Listed</h3>

    <p>Unable to find any cars for you.</p>
    

<?php endif ?>
<script>
	function getData(slug) {
		
		// Fetch data
		fetch('https://mi-linux.wlv.ac.uk/~2378632/project-root2/public/ajaxnews/' + slug)
			
		  // Convert response string to json object
		  .then(response => response.json())
		  .then(response => {

			// Copy one element of response to our HTML paragraph
			document.getElementById("ajaxArticle").innerHTML = response.title + ": " + response.slug;
		  })
		  .catch(err => {
			
			// Display errors in console
			console.log(err);
		});
	}
</script>


