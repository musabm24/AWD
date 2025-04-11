<style>
    .card {
        border: none;
        max-width: 900px;
        margin: auto;
    }

    .card-img-left {
        width: 100%;
        border-radius: 10px;
    }

    .card-title {
        font-size: 2rem;
        font-weight: bold;
    }

    .card-price {
        font-size: 1.5rem;
        color: #28a745;
        font-weight: bold;
    }

    .list-group-item {
        font-size: 1rem;
        font-weight: 500;
    }

    

    .container {
        margin-top: 50px;
    }

    

    @media (max-width: 768px) {
        .row.flex-md-row {
            flex-direction: column !important;
        }

        .card-img-left {
            margin-bottom: 20px;
        }
    }
</style>

<div class="container">
    <a href="https://mi-linux.wlv.ac.uk/~2378632/project-root2/public/motormarket/cars" class="btn btn-primary">&larr; Back to listing</a>
    <div class="card p-3">
        <div class="row g-4 flex-md-row">
            <!-- Left column: image -->
            <div class="col-md-6">
                <img src="<?= esc($car['image']) ?>" class="card-img-left" alt="<?= esc($car['make']) ?> <?= esc($car['model']) ?>">
            </div>

            <!-- Right column: details -->
            <div class="col-md-6">
                <div class="card-body px-0">
                    <h1 class="card-title"><?= esc($car['make']) ?> <?= esc($car['model']) ?></h1>
                    
                    <p class="card-price">£<?= esc($car['price']) ?></p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item">Mileage: <?= esc($car['milage']) ?> miles</li>
                        <li class="list-group-item">Year: <?= esc($car['year']) ?></li>
                        <li class="list-group-item">Gearbox: <?= esc($car['gearbox']) ?></li>
                        <li class="list-group-item">Fuel Type: <?= esc($car['fuel']) ?></li>
                    </ul>
                    
                </div>
            </div>
            <p class="card-text"><?= esc($car['description']) ?></p>
        </div>
        
    </div>
    <h2 class="mt-4 text-center";>Car is available at out Dealership</h2>
    <h3 class="card-title text-center">Visit now!</h3>
    <div id="map" style="height: 400px; width: 100%; margin-top: 20px;"></div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo esc($google_maps_api_key); ?>&callback=initMap" async defer></script>
<script>
    function initMap() {
        const defaultLocation = { lat: 52.480112918737134, lng: -1.8335109684997086 }; 

        const location = {
            lat: <?= isset($car['latitude']) && $car['latitude'] ? esc($car['latitude']) : '52.480112918737134' ?>,
            lng: <?= isset($car['longitude']) && $car['longitude'] ? esc($car['longitude']) : '-1.8335109684997086' ?>,
        };

        const map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: location,
        });

        const marker = new google.maps.Marker({
            position: location,
            map: map,
        });
    }
</script>