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
        color:rgb(0, 0, 0);
        font-size: 1.5rem;
        font-weight: bold;
    }
    .card-details {
        display: flex;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }
    .card-detail {
        background-color: #f8f9fa;
        padding: 0.25rem 0.5rem;
        border-radius: 0.25rem;
        font-size: 0.875rem;
        color: #333;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        width: 100%;
    }
    .container{
        margin-top: 70px;
    }

    @media (max-width: 768px) {
        .container{
            margin-top: 50px;
        }

    }
</style>

<div class="container mt-5">
    <div id="carResults">
    <?php if (!empty($cars) && is_array($cars)): ?>
    <div class="row row-cols-1 row-cols-md-1 row-cols-lg-4 g-4">
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
</div>
</div>
</div>


<script>
    function filterCars() {
        const make = document.getElementById('carMake').value;
        const model = document.getElementById('carModel').value;

        fetch(`https://mi-linux.wlv.ac.uk/~2378632/project-root2/public/cars/filter?make=${make}&model=${model}`)
            .then(response => response.text())
            .then(data => {
                document.getElementById('carResults').innerHTML = data;
            })
            .catch(error => console.error('Error:', error));
    }
</script>