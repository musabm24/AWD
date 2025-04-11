<?php if (!empty($cars) && is_array($cars)): ?>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <?php foreach ($cars as $car): ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="<?= esc($car['image']) ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= esc($car['make']) ?> <?= esc($car['model']) ?></h5>
                        <p class="card-text"><?= esc($car['description']) ?></p>
                        <p class="card-price">£<?= esc($car['price']) ?></p>
                        <div class="card-details">
                            <span class="card-detail"><?= esc($car['milage']) ?> miles</span>
                            <span class="card-detail"><?= esc($car['gearbox']) ?></span>
                            <span class="card-detail"><?= esc($car['fuel']) ?></span>
                        </div>
                        <a class="btn btn-primary" href="<?= base_url('motormarket/cars/view/' . esc($car['id'])) ?>">View Car</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
<?php else: ?>
    <h3>No Cars Listed</h3>
    <p>Unable to find any cars for you.</p>
<?php endif ?>