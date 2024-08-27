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
    <link rel="stylesheet" href="css/about.css">
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
                    <img src="img/mayon volcano.jpg" alt="Vacation Background" class="img-responsive" data-aos="fade-up" data-aos-delay="0">
                </div>
                <div class="col-md-6">
                    <div class="title huge" data-aos="fade-down" data-aos-delay="200">Why Visit Albay?</div>
                    <div class="description" data-aos="fade-up" data-aos-delay="300">Albay, a province nestled in the heart of the Bicol region, is a captivating destination that promises a diverse array of experiences for every traveler. 
                        Known for its iconic Mayon Volcano, which boasts the world’s most perfect cone, Albay is a place where natural beauty meets rich cultural heritage. 
                        From its breathtaking landscapes and historical landmarks to its vibrant festivals and mouthwatering cuisine, Albay offers a unique blend of adventure, relaxation, and cultural immersion. Whether you're an outdoor 
                        enthusiast, a history buff, or simply looking to escape the hustle and bustle of city life, Albay is a destination that will leave you in awe and inspire you to explore more.
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <!-- Brief History -->
    <section class="history">
        
            <div class="title huge" data-aos="fade-down" data-aos-delay="200">Brief History</div>
                <div class="description" data-aos="fade-up" data-aos-delay="300">Albay’s history is deeply intertwined with the imposing presence of Mayon Volcano, whose eruptions have shaped both the land and the lives of its inhabitants. 
                    The province was originally inhabited by the ancient Bicolanos, and it became an important settlement during the Spanish colonial period. The town of Cagsawa, now known for the famous Cagsawa Ruins, was once a thriving
                    community before it was buried by the catastrophic eruption of Mayon in 1814.
                </div>
                <div class="description" data-aos="fade-up" data-aos-delay="300">Throughout its history, Albay has been a melting pot of cultures, influenced by its indigenous roots, Spanish colonization, and its strategic location as a gateway to the rest of the Bicol region. 
                    Today, Albay stands as a symbol of resilience and rebirth, proudly preserving its heritage while embracing modernity. The province plays a significant role in the Philippines’ cultural landscape, contributing to the nation’s rich tapestry of traditions, arts, and cuisine.
                </div>
            </div>
        </div>
    </section>
    
    <!-- Travels -->
    <section class="travels">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="swiper-container" id="swiper-travel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"> 
                            <img src="img/cagsawa.jpg" alt="Cagsawa Ruins" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/hoyop-hoyopan cave.jpg" alt="Hoyop-Hoyopan Cave" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/vera falls.jpg" alt="Vera Falls" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/daraga church.jpg" alt="Daraga Church" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/farm plate.jpg" alt="Farm Plate" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pottery.jpg" alt="Pottery" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pinangat.jpg" alt="Pinangat" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pili.jpg" alt="Pili" class="img-circle">
                        </div>p
                    </div>
                    <div class="swiper-pagination"></div>
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
