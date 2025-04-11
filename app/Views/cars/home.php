<html>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
            box-sizing: border-box;
        }

        .container,
        .container-fluid {
            width: 100%;
            max-width: 100vw;
            padding: 0 !important;
            margin: 0 !important;
        }

        .assurance {
            display: flex;
            flex-wrap: wrap;
            background-color: #000000;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            background-color: #000000;
            width: 100%;
            padding: 20px;
        }

        .box1 {
            flex: 1 1 100px;
            max-width: 200px;
            color: #ffffff;
            background-color: #000000;
            text-align: center;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .box1 p {
            margin: 0;
            line-height: 1.4;
        }

        .about {
            margin-top: 40px;
            text-align: center;
            padding: 0 15px;
        }

        .para {
            margin-top: 30px;
            width: 90%;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            font-size: 18px;
        }

        .checkout {
            text-align: center;
            font-size: 20px;
        }

        .socialicons {
            text-align: center;
            margin-bottom: 40px;
        }

        .socialicons a {
            text-decoration: none;
            font-size: 20px;
            margin: 0 10px;
            color: #000000;
            transition: transform 0.5s;
        }

        .socialicons a:hover {
            color: #263f37c5;
            transform: translateY(-5px);
        }

        .featured-cars-section {
            background-color: #ffffff;
            padding: 40px 20px;
            margin-left: 40px;
            margin-right: 40px;
        }

        #featuredCars {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            background-color: #ffffff;
        }

        .featured-cars-section h2 {
            color: rgb(0, 0, 0);
            margin-bottom: 30px;
        }

        .card {
            background-color: #ffffff;
            border: none;
            border-radius: 10px;
            width: 100%;
            max-width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            width: 100%;
        }

        .card-price {
            color: #000000;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .card-details {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
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

        .btn2 {
            background: #007bff;
            margin-top: 45px;
            display: flex;
            margin-left: auto;
            margin-right: auto;
            align-items: center;
            color: white;
            justify-content: center;
            border: 1px solid white;
            border-radius: 10px;
            padding: 15px 25px;
            transition: transform 0.5s;
            font-size: 16px;
        }

        .btn2 i {
            margin-right: 10px;
        }

        .hero-section {
            height: 300px;
            background-image: url('https://c.files.bbci.co.uk/7918/production/_128000013_merc-benz-ayl-010.jpg');
            background-size: cover;
            background-position: center;
        }

        .contact {
            min-height: 100vh;
            background-color: beige;
            padding: 50px 20px;
            text-align: center;
        }

        .ccontainer {
            max-width: 800px;
            margin: 0 auto;
        }

        .ccontainer h2 {
            font-size: 32px;
            margin-bottom: 30px;
            margin-top: 50px;
        }

        .contact-wrapper {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .contact-form,
        .contact-info {
            text-align: left;
        }

        .contact-form h3,
        .contact-info h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #000000;
        }

        .group-form {
            margin-bottom: 20px;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: none;
            background-color: lightgrey;
            color: #000000;
        }

        input:focus,
        textarea:focus {
            outline: none;
            box-shadow: 0 0 8px #000000;
        }

        @media screen and (min-width: 768px) {
            .contact-wrapper {
                flex-direction: row;
            }

            .card {
                width: calc(33.333% - 20px);
            }

            .hero-section {
                height: 500px;
            }

            .para {
                font-size: 20px;
            }

            .btn2 {
                font-size: 18px;
            }
        }



    </style>

    <body>
        <div class="container-fluid px-0">
            <div class="hero-section"></div>

            <div>
                <div class="assurance">
                    <div class="row">
                    
                        <div class="box1">
                                <p>Affordable Prices</p>
                        </div>
                        <div class="box1">
                                <p>Premium <br>Quality</p>
                        </div>
                        <div class="box1">
                                <p>Trusted By 1000's</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="about">
                <div class="about">
                    <h1>About Us</h1>
                    <p class="para">
                        Welcome to <strong>Motor Market</strong>, your trusted destination for quality vehicles at unbeatable prices. Whether you're looking for a reliable sedan, a powerful SUV, or a fuel-efficient hatchback, we have something for everyone.  
                        
                        At Motor Market, we are committed to providing a seamless car-buying experience. Our carefully selected inventory includes both new and pre-owned vehicles, ensuring you find the perfect match for your needs and budget.  
                        
                        With a passion for excellence, our team prioritizes customer satisfaction by offering competitive financing options, expert guidance, and top-tier after-sales service. Drive home with confidence—Motor Market is here to get you on the road in style.
                    </p>

                    <p class="checkout">Follow us on social media for the latest deals and updates:</p>
                    <div class="socialicons">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    </div>
                </div>
            </div>
        
            <div class="featured-cars-section">
                <div class="container mt-5">
                    <h2 class="text-center">Featured Cars</h2>
                    <div id="featuredCars" class="row row-cols-1 row-cols-md-1 row-cols-lg-4 g-4">
                        <?php 
                        if (!empty($featuredCars) && is_array($featuredCars)): 
                            $limitedCars = array_slice($featuredCars, 0, 8);
                            foreach ($limitedCars as $car): 
                        ?>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img src="<?= esc($car['image']) ?>" class="card-img-top" alt="<?= esc($car['make']) ?> <?= esc($car['model']) ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= esc($car['make']) ?> <?= esc($car['model']) ?></h5>
                                        <p class="card-text"><?= esc($car['description']) ?></p>
                                        <p class="card-price">£<?= esc($car['price']) ?></p>
                                        <div class="card-details">
                                            <span class="card-detail"><?= esc($car['milage']) ?> miles</span>
                                            <span class="card-detail"><?= esc($car['gearbox']) ?></span>
                                            <span class="card-detail"><?= esc($car['fuel']) ?></span>
                                        </div>
                                        <a class="btn btn-primary" href="<?= base_url('motormarket/cars/view/' . esc($car['id'])) ?>">View Car</a>                                    </div>
                                </div>
                            </div>
                        <?php 
                            endforeach;
                        else: 
                        ?>
                            <h3 class="text-center">No Featured Cars Available</h3>
                        <?php endif ?>
                    </div>
                </div>
                <div>
                    <button onclick="window.location.href='https://mi-linux.wlv.ac.uk/~2378632/project-root2/public/motormarket/cars'" class="btn2">
                        <i class="fa-solid fa-car"></i>
                        <span>View All Cars</span> 
                    </button>
                </div>
            </div>

            <div id="contact">
                <div class="ccontainer">
                    <h2 class="text-center">Contact Us</h2>
                    <div class="contact-wrapper">
                    <div class="contact-form">
                        <h3>Send a message</h3>
                        <form>
                            <div class="group-form">
                                <input type="text" name="first-name" placeholder="Enter your first name"/>
                            </div>
                            <div class="group-form">
                                <input type="text" name="last-name" placeholder="Enter your last name"/>
                            </div>
                            <div class="group-form">
                                <input type="email" name="email" placeholder="Enter your E-mail"/>
                            </div>
                            <div class="group-form">
                                <textarea name="message" placeholder="Enter your message"></textarea>
                            </div>
                            <button class="btn2" type="submit">Submit</button>
                        </form>
                    </div>
                    <div class="contact-info">
                        <h3>Contact info</h3>
                        <p><i class="fa-solid fa-phone"></i>+44712345849</p>
                        <P><i class="fa-solid fa-envelope"></i>info@motormarket.com</P>
                        <p><i class="fa-solid fa-location-dot"></i>Wilfruna St, Wolverhampton, UK</p>
                    </div>
                </div>
            </div>
            <h2 class="mt-4 text-center";>Visit Motor Market</h2>
            <div id="map" style="height: 500px; width: 80%; margin-top: 20px; margin-left: auto; margin-right: auto;"></div>
            </div>
        </div>

    </body>

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

</html>