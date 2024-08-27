<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist Spots and Destinations</title>

    <!-- Import Vendor Style -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- Import Custom Style -->
    <link rel="stylesheet" href="css/homepage.css">
</head>

<body id>
   <!-- Navbar -->
   <nav class="navbar">
        <ul>
            <li><a href="homepage">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="content">Tourist Spots and Destinations</a></li>
        </ul>
        <div class="menu-icon" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </nav>

    <script>
        function toggleMenu() {
            const navbar = document.querySelector('.navbar ul');
            navbar.classList.toggle('responsive');
        }
    </script>
    
    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/mayon.jpg" alt="Vacation Background" class="img-responsive" data-aos="fade-up" data-aos-delay="0">
                </div>
                <div class="col-md-6">
                    <div class="title huge" data-aos="fade-down" data-aos-delay="200">Discover Albay</div>
                    <div class="description" data-aos="fade-up" data-aos-delay="300">Albay, a province in the Bicol Region of the Philippines, is a captivating destination known for its stunning natural landscapes, rich history, and vibrant culture. 
                        Dominated by the majestic Mayon Volcano, famous for its near-perfect cone shape, Albay offers a unique blend of adventure, relaxation, and cultural immersion. From the iconic Cagsawa Ruins to the pristine beaches of Cagraray Island, 
                        Albay is a treasure trove of experiences waiting to be explored. Whether you're a thrill-seeker looking for outdoor adventures or a history buff eager to delve into the past, Albay promises a memorable journey that will leave you enchanted by its beauty and charm.</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Feature -->
    <section class="feature">
    <div class="title medium">Destination Categories</div>
    <div class="container">
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="feature-box" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-icon collage">
                    <div class="collage-item"><img src="img/cagraray.jpg" alt="Natural Wonders Image 1"></div>
                    <div class="collage-item"><img src="img/sumlang lake.jpg" alt="Natural Wonders Image 2"></div>
                    <div class="collage-item"><img src="img/vera falls.jpg" alt="Natural Wonders Image 3"></div>
                    <div class="collage-item"><img src="img/quitinday hills.jpg" alt="Natural Wonders Image 4"></div>
                </div>
                <div class="feature-title">Natural Wonders</div>
                <div class="feature-description">
                    Explore the most stunning natural landscapes, from towering volcanoes to serene lakes and majestic waterfalls.
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="feature-box" data-aos="fade-up" data-aos-delay="600">
                <div class="feature-icon collage">
                    <div class="collage-item"><img src="img/cagsawa.jpg" alt="Historical Sites Image 1"></div>
                    <div class="collage-item"><img src="img/daraga church.jpg" alt="Historical Sites Image 2"></div>
                    <div class="collage-item"><img src="img/hoyop-hoyopan.jpg" alt="Historical Sites Image 3"></div>
                    <div class="collage-item"><img src="img/camalig church.jpg" alt="Historical Sites Image 4"></div>
                </div>
                <div class="feature-title">Historical Sites</div>
                <div class="feature-description">
                    Discover the rich history of Albay through its well-preserved historical landmarks and cultural sites.
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="feature-box" data-aos="fade-up" data-aos-delay="900">
                <div class="feature-icon collage">
                    <div class="collage-item"><img src="img/lignon hill.jpg" alt="Adventure Sports Image 1"></div>
                    <div class="collage-item"><img src="img/atv.jpg" alt="Adventure Sports Image 2"></div>
                    <div class="collage-item"><img src="img/kawa-kawa.jpg" alt="Adventure Sports Image 3"></div>
                    <div class="collage-item"><img src="img/mount masaraga.jpg" alt="Adventure Sports Image 4"></div>
                </div>
                <div class="feature-title">Adventure Sports</div>
                <div class="feature-description">
                    Engage in thrilling outdoor activities and adventure sports that will get your adrenaline pumping.
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Import Vendor Script -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/swiper.min.js"></script>
    <script type="text/javascript" src="js/aos.js"></script>

    <!-- Import Custom Script -->
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
