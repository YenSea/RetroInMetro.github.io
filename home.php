<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RetroInMetro-Home</title>
    <link rel="icon" type="image/JPEG" href="images/RetroInMetro-logo.jpeg">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- header section starts -->
    <section class="header">
        <a href="home.php" class="logo"><img src="images/RetroInMetro-logo.jpeg" alt="Retro In Metro" width="60rem"></a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="vision.php">Vision</a>
            <a href="products.php">Products</a>
            <a href="contactus.php">Contact us</a>
        </nav>

        <div class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- header section ends -->

    <!-- home section starts -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>We thrive to bring back all the good from History to the present and save our future</span>
                        <h3>explore the right way</h3>
                        <a href="products.php" class="btn">Check Our Products</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>We thrive to bring back all the good from History to the present and save our future</span>
                        <h3>explore from right people</h3>
                        <a href="contactus.php" class="btn">contact us</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </section>
    <!-- home section ends -->

    <!-- services section starts -->
    <section class="services">
        <h1 class="heading-title"> our services </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>our motto</h3>
            </div>

            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>our team</h3>
            </div>

            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>our process</h3>
            </div>

        </div>
    </section>
    <!-- services section ends -->

    <!-- home about section starts -->
    <section class="home-about">

        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>We at Retro In Metro envision to strive to make our future Healthy in a natural way. To achieve this our team works out with History and life habits from the elders and align these to our Fast forwarded modern time.</p>
            <a href="vision.php" class="btn">read more</a>
        </div>

    </section>
    <!-- home about section ends -->

    <!-- home packages section starts -->

    <section class="home-packages">

        <h1 class="heading-title"> our packages </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Our Products</h3>
                    <p>please do checkout all our products</p>
                    <a href="products.php" class="btn">order now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Our Products</h3>
                    <p>please do checkout all our products</p>
                    <a href="products.php" class="btn">order now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Our Products</h3>
                    <p>please do checkout all our products</p>
                    <a href="products.php" class="btn">order now</a>
                </div>
            </div>

        </div>

        <div class="load-more"> <a href="products.php" class="btn">load more</a> </div>
    </section>
    <!-- home packages section ends -->















    <!-- footer section starts -->
    <section class='footer'>
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="vision.php"><i class="fas fa-angle-right"></i> Vision</a>
                <a href="products.php"><i class="fas fa-angle-right"></i> Products</a>
                <a href="contactus.php"><i class="fas fa-angle-right"></i> Contact us</a>
            </div>
            <div class="box">
                <h3>extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> about us</a>
                <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +91 8123 363 876 </a>
                <a href="#"><i class="fas fa-envelope"></i> customersupport@retroinmetro.com </a>
                <a href="#"><i class="fas fa-map"></i> doddaballapura, india - 561203 </a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook"></i> facebook </a>
                <a href="#"><i class="fab fa-instagram"></i> instagram </a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin </a>
            </div>
        </div>
        <div class="credit"> created by <span>Team "Retro In Metro"</span> | all rights reserved! </div>
    </section>
    <!-- footer section ends -->








    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="js/script.js"></script>
</body>

</html>