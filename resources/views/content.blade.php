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
    <link rel="stylesheet" href="css/content.css">
</head>

<body>
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
            <div class="hero-content">
                <div class="text-content" data-aos="fade-down" data-aos-delay="200">
                    <div class="title huge">Explore Albay's Gems</div>
                </div>
                <div class="collage-container">
                    <div class="collage-item"><img src="img/mayon-volcano.jpg" alt="Mayon Volcano"></div>
                    <div class="collage-item"><img src="img/bambusetum.jpg" alt="Bambusetum"></div>
                    <div class="collage-item"><img src="img/vera falls.jpg" alt="Vera Falls"></div>
                    <div class="collage-item"><img src="img/atv2.jpg" alt="Lignon Hill"></div>  
                </div>
            </div>
        </div>
    </section>

     <!-- Natural Wonders Category -->
    <div class="container">
        <div class="category-title">Natural Wonders</div>
            <div class="destination-item">
            <div class="destination-name">Cagraray Eco Park - Cagraray Island, Bacacay, Albay</div>
            <div class="collage">
                <img src="img/cagraray.jpg" alt="Cagraray Eco Park">
                <img src="img/cagraray1.jpg" alt="Cagraray Eco Park">
                <img src="img/cagraray2.jpg" alt="Cagraray Eco Park">
            </div>
                <div class="destination-content">
                    <div class="destination-description">Cagraray Eco Park is an eco-tourism destination located on Cagraray Island, known for its natural beauty and environmental conservation efforts. 
                        The park features a range of activities including hiking, bird-watching, and exploring mangrove forests. It also offers stunning views of the surrounding coastline and nearby islands. 
                        The park is designed to promote environmental awareness and sustainable tourism while providing an enjoyable experience for visitors. Open all year round. Activities include sightseeing, photography, hiking, and ATV adventures.</div>
                </div>
            </div>

            <div class="destination-item">
            <div class="destination-name">Sumlang Lake - Camalig, Albay</div>
            <div class="collage">
                <img src="img/sumlang lake.jpg" alt="Sumlang Lake">
                <img src="img/sumlang lake1.jpg" alt="Sumlang Lake">
                <img src="img/sumlang lake2.jpg" alt="Sumlang Lake">
            </div>
                <div class="destination-content">
                    <div class="destination-description">A tranquil lake with a picturesque view of Mayon Volcano, perfect for relaxation and water activities. Sumlang Lake is known for its bamboo rafts and scenic surroundings.
                        Explore the rich culture of the southern part of Luzon by visiting Sumlang Lake, one of Albay's newest attractions. Try kayaking in the clear waters of the lake while gazing up at the historical Mayon Volcano
                        Have a relaxing ride on a bamboo raft while enjoying the beautiful scenery of Albay. Open daily. Activities include bamboo raft rides, kayaking, and lakeside dining.
                    </div>
                </div>
            </div>

            <div class="destination-item">
            <div class="destination-name">Vera Falls - Malinao, Albay</div>
            <div class="collage">
                <img src="img/vera falls.jpg" alt="Vera Falls">
                <img src="img/vera falls1.jpg" alt="Vera Falls">
                <img src="img/vera falls2.jpg" alt="Vera Falls">
            </div>
                <div class="destination-content">
                    <div class="destination-description">A hidden gem nestled in the forests of Malinao, Vera Falls is a beautiful waterfall surrounded by lush greenery. Ideal for a refreshing dip and nature walks.
                        Open daily. Activities include swimming and picnicking. Entrance fees apply. Limited amenities; best to bring your own provisions.
                    </div>
                </div>
            </div>

            <div class="destination-item">
            <div class="destination-name">Quitinday Hills - Camalig, Albay</div>
            <div class="collage">
                <img src="img/quitinday hills.jpg" alt="Quitinday Hills">
                <img src="img/quitinday hills1.jpg" alt="Quitinday Hills">
                <img src="img/quitinday hills2.jpg" alt="Quitinday Hills">
            </div>
                
                <div class="destination-content">
                    <div class="destination-description">Often compared to the Chocolate Hills of Bohol, Quitinday Hills features rolling green landscapes. 
                        It’s an off-the-beaten-path destination offering breathtaking views of the hills and Mayon Volcano.  Open daily. Popular for hiking and photography. Entrance fees may apply. Minimal amenities; best to bring water and snacks.</div>
                    </div>
                </div>
            </div>
    </div>
           
    <div class="container">
        <div class="category-title">Historical Sites</div>
            <div class="destination-item">
            <div class="destination-name">Cagsawa Ruins - Daraga, Albay</div>
            <div class="collage">
                <img src="img/cagsawa.jpg" alt="Cagsawa Ruins">
                <img src="img/cagsawa1.jpg" alt="Cagsawa Ruins">
                <img src="img/cagsawa2.jpg" alt="Cagsawa Ruins">
            </div>
                <div class="destination-content">
                    <div class="destination-description">The remnants of a 16th-century Franciscan church destroyed by the 1814 eruption of Mayon Volcano. The Cagsawa Ruins are a poignant reminder of Albay’s history and a popular spot for photos with Mayon as the backdrop.
                        Open daily from 8 AM to 6 PM. Entrance fees apply. Nearby amenities include souvenir shops, cafes, and a small museum.
                     </div>
                </div>
            </div>

            <div class="destination-item"> 
            <div class="destination-name">Daraga Church - Daraga, Albay</div>
            <div class="collage">
                <img src="img/daraga church.jpg" alt="Daraga Church">
                <img src="img/daraga church2.jpg" alt="Daraga Church">
                <img src="img/daraga church1.jpg" alt="Daraga Church">
                
            </div>
                
                <div class="destination-content">
                    <div class="destination-description">An 18th-century baroque church perched on a hill, offering a stunning view of Mayon Volcano. The church is a National Cultural Treasure and a must-visit for history and architecture enthusiasts.
                        Open daily. No entrance fees. Nearby amenities include restaurants and souvenir shops in Daraga town.
                    </div>
                </div>
            </div>

            <div class="destination-item">
            <div class="destination-name">Hoyop-Hoyopan Cave - Camalig, Albay</div>
            <div class="collage">
                <img src="img/hoyop-hoyopan cave.jpg" alt="Hoyop-Hoyopan Cave">
                <img src="img/hoyop-hoyopan cave1.jpg" alt="Hoyop-Hoyopan Cave">
                <img src="img/hoyop-hoyopan cave2.jpg" alt="Hoyop-Hoyopan Cave">
            </div>
                <div class="destination-content">
                    <div class="destination-description">A multi-level cave with impressive stalactites and stalagmites. Hoyop-Hoyopan Cave, meaning "blow-blow" in Bicolano, is named after the cool breeze felt inside. It’s a fascinating site for those interested in natural formations and history.
                        Open daily. Entrance fees apply. Guided tours available. Limited amenities, so bring water and snacks.
                    </div>
                </div>
            </div>

            <div class="destination-item">
            <div class="destination-name">Camalig Church - Camalig Church</div>
            <div class="collage">
                <img src="img/camalig church.jpg" alt="Camalig Church">
                <img src="img/camalig church1.jpg" alt="Camalig Church">
                <img src="img/camalig church2.jpg" alt="Camalig Church">
            </div>
                <div class="destination-content">
                    <div class="destination-description">Built in the late 16th century, this church is one of the oldest in Albay. The church's structure is predominantly made of volcanic rocks and exhibits the unique blend of Spanish colonial architecture and local construction materials. 
                        The church's preservation provides a glimpse into the rich religious history of the region. The church is open to the public for daily mass and visits. Guided tours are available upon request.
                    </div>
                </div>
            </div>
    </div>

    <div class="container">
        <div class="category-title">Adventure Spots</div>
            <div class="destination-item">
            <div class="destination-name">Ligñon Hill Nature Park - Legazpi City, Albay</div>
            <div class="collage">
                <img src="img/lignon hill.jpg" alt="Ligñon Hill Nature Park">
                <img src="img/lignon hill1.jpg" alt="Ligñon Hill Nature Park">
                <img src="img/lignon hill2.jpg" alt="Ligñon Hill Nature Park">
            </div>
                <div class="destination-content">   
                    <div class="destination-description">A popular spot offering panoramic views of Mayon Volcano, Legazpi City, and the Albay Gulf. The park is a haven for outdoor enthusiasts with activities such as zip-lining, hiking, and visiting the historic Japanese tunnel.
                        Open daily from 8 AM to 6 PM. Entrance fees apply. Activities include zip-lining, hiking, and 4x4 rides. Nearby amenities include cafes, shops, and rest areas.
                    </div>
                </div>
            </div>

            <div class="destination-item">
            <div class="destination-name">ATV Adventure around Mayon</div>
            <div class="collage">
                <img src="img/atv.jpg" alt="ATV Adventure around Mayon">
                <img src="img/atv1.jpg" alt="ATV Adventure around Mayon">
                <img src="img/atv2.jpg" alt="ATV Adventure around Mayon">
            </div>
                <div class="destination-content">
                    <div class="destination-description">An exhilarating way to explore the base of Mayon Volcano, ATV adventures offer a thrilling ride through rugged terrain, lava fields, and scenic trails with stunning views of the volcano.
                        Open daily. Tour packages available, with prices depending on the trail length and difficulty. Safety gear provided. Nearby amenities include restaurants and tour offices.
                    </div>
                </div>
            </div>

            <div class="destination-item">
            <div class="destination-name">Kawa-Kawa Hill - Ligao City, Albay</div>
            <div class="collage">
                <img src="img/kawa kawa.jpg" alt="Kawa-Kawa Hill">
                <img src="img/kawa-kawa1.jpg" alt="Kawa-Kawa Hill">
                <img src="img/bambusetum.jpg" alt="Kawa-Kawa Hill">
            </div>
                <div class="destination-content">
                    <div class="destination-description"> Known as the "Hill Without a Hilltop," Kawa-Kawa Hill is shaped like a giant cauldron. It’s a popular pilgrimage site during Holy Week and offers peaceful walking trails and stunning views of the surrounding countryside.
                        Open daily. No entrance fees. Activities include hiking and pilgrimage. Limited amenities; bring water and snacks.
                    </div>
                </div>
            </div>

            <div class="destination-item">
            <div class="destination-name">Mount Masaraga - Ligao City, Albay</div>
            <div class="collage">
                <img src="img/mount masaraga.jpg" alt="Mount Masaraga">
                <img src="img/mount masaraga1.jpg" alt="Mount Masaraga">
                <img src="img/mount masaraga2.jpg" alt="Mount Masaraga">
            </div>
                <div class="destination-content">
                    <div class="destination-description">For more experienced hikers, Mt. Masaraga offers a challenging trek with steep slopes and dense forest trails. 
                        The summit provides breathtaking views of the Mayon Volcano, Mt. Isarog, and the surrounding Bicol region. This climb is perfect for those looking to conquer a more demanding peak.
                        Mount Masaraga is placed in the boundary of the cities of Ligao and Tabaco. It is one of the three volcanic mountains called the “MAGAYON TRIO” with Mount Malinao and Mount Mayon. 
                        It is the smallest of the three mountains yet it offers a challenging and breathtaking experience. Revealing itself to be one of the Bicol’s best hiking secrets discovered in April 2011.
                        A guide is recommended, and the trek typically takes a full day. Proper hiking gear and physical preparation are necessary.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Destinations -->
    <section class="destinations">
        <div class="title medium">Other Destinations</div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="destination-box">
                        <div class="destination__image">
                            <img src="img/mayon skyline.jpg" alt="Mayon Skyline">
                        </div>
                        <div class="destination__title">Mayon Skyline</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="destination-box">
                        <div class="destination__image">
                            <img src="img/jovellar river.jpg" alt="Jovellar Undeground River">
                        </div>
                        <div class="destination__title">Jovellar Undeground River</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="destination-box">
                        <div class="destination__image">
                            <img src="img/solong eco park.jpg" alt="Solong Eco Park">
                        </div>
                        <div class="destination__title">Solong Eco Park</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="destination-box">
                        <div class="destination__image">
                            <img src="img/albay park.jpg" alt="Albay Park and Wildlife">
                        </div>
                        <div class="destination__title">Albay Park and Wildlife</div>
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