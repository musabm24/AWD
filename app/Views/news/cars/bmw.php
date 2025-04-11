<style>
    .card {
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }
    .card-body {
        padding: 15px;
    }
    .card-title {
        font-size: 1.25rem;
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

<h1>BMW cars</h1>
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
                            <p class="card-price">£40,779</p>
                            <p class="card-old-price">off £45,407 RRP</p>
                            <p class="card-location">Stoke On Trent (38 miles)</p>
                            <p class="card-rating">4.9 ★★★★</p>
                            <a class="btn btn-primary" href="https://mi-linux.wlv.ac.uk/~2378632/project-root2/public/news/<?= esc($news_item['slug'], 'url') ?>">View Car</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No news found for BMW.</p>
        <?php endif; ?>
    </div>
</div>