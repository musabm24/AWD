<p id="ajaxArticle"></p>

<style>
    .hero {
        background: url('https://t3.ftcdn.net/jpg/09/09/04/42/360_F_909044231_j23kABmRbzGaZOLthX2s2ENHWvYqkUu3.jpg') no-repeat center center;
        background-size: cover;
        height: 400px;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    .hero h1 {
        color:rgb(63, 42, 42);
        font-size: 3rem;
        font-weight: bold;
    }
    .card-text {
        max-height: 4.5rem;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
    }
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }
    .card-price {
        color: #d9534f;
        font-size: 1.5rem;
        font-weight: bold;
    }
    .card-old-price {
        text-decoration: line-through;
        color: #999;
    }
    .card-location {
        font-size: 0.875rem;
        color: #666;
    }
    .card-rating {
        font-size: 0.875rem;
        color: #f39c12;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
</style>
<div class="hero">
        <h1>Welcome to M Cars</h1>
    </div>

    <!-- Main Content -->
    <div class="container mt-5">
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
                                <p class="card-price">£40,779</p>
                                <p class="card-rating">4.9 ★</p>
                                <a class="btn btn-primary" href="https://mi-linux.wlv.ac.uk/~2378632/project-root2/public/news/<?= esc($news_item['slug'], 'url') ?>">View Car</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        <?php else: ?>
            <h3>No Cars Listed</h3>
            <p>Unable to find any cars for you.</p>
        <?php endif ?>
    </div>
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

