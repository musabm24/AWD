<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <img src="<?= esc($news['image']) ?>" alt="<?= esc($news['title']) ?>" class="img-fluid">
        </div>
        <div class="col-md-5">
            <h2><?= esc($news['title']) ?></h2>
            <p><?= esc($news['body']) ?></p>
        </div>
    </div>
</div>

<style>
    .img-fluid {
        max-width: 100%;
        height: auto;
    }
</style>