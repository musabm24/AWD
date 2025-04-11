<style>
    .card-text {
        max-height: 4.5rem; /* Adjust the height as needed */
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 4; /* Number of lines to show */
        -webkit-box-orient: vertical;
    }
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }
</style>

<h1>Audi cars</h1>
<div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <?php if (!empty($news) && is_array($news)): ?>
            <?php foreach ($news as $news_item): ?>
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
            <?php endforeach; ?>
        <?php else: ?>
            <p>No news found for Audi.</p>
        <?php endif; ?>
    </div>
</div>