<?php

session_start();
require('conf.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket World</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-5.css">
    <link rel="stylesheet" href="cart.css">


</head>
<title>Cricket World</title>

<body>
    <!-- Header section -->
    <?php 
        include("partials/header.php")
    ?>

<!--home section starts-->
    <section class="home" id="home">
        <div class="swiper mySwiper home-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our sepecial offers</span>
                        <h3>SF Elite Reserve Kit Bag</h3>
                        <p>Made from premium PU coated material.Premium quality zips for better durability Size:40 X 16 X 16 INCH</p>
                    

                    </div>
                    <div class="image">
                        <img src="images/sf bag.webp" alt="">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our sepecial offers</span>
                        <h3>CAMO PREMIUM SF bat</h3>
                        <p>Made with the grade 2 English willow,mid-blade swell for all styles players, promising a sustained sweet spot across the blade. Comes with full length padded bat cover with adjustable straps</p>
                    

                    </div>
                    <div class="image">
                        <img src="images/SF bat.jpeg" alt="">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our sepecial offers</span>
                        <h3>SF Batting Pad</h3>
                        <p>Black Edition is top of the range player grade modern style batting pad. The  most advance pad Elite protection</p>
                    
                    </div>
                    <div class="image">
                        <img src="images/SF pads.webp" alt="">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our sepecial offers</span>
                        <h3>SF Batting Gloves</h3>
                        <p>Camo ADI is one of the highest quality gloves in camoflague range the palm of this gloves is made from high quality leather.Extra finger protection reinforced with thermoplastic polyurethane insert in the first two fingers for ultimate protection.</p>
                    

                    </div>
                    <div class="image">
                        <img src="images/SF gloves.webp" alt="">
                    </div>
                </div>
                    
            </div>
            <div class="swiper-pagination"></div>
            
        </div>

    </section>

    <section class="bats" id="bats">
        <h3 class="sub-heading">our bats</h3>
        <h1 class="heading">Recommended bats</h1>
    
        <div class="box-container">
            <?php
                include_once("render_products.php");
            ?>
        </div>
    </section>

    <section class="Gloves" id="Gloves">
        <h3 class="sub-heading">our Gloves</h3>
        <h1 class="heading">Recommended Gloves</h1>
    
        <div class="box-container">
            <?php
                include_once("render_products2.php");
            ?>
        </div>
    </section>

    <section class="LegPads" id="LegPads">
        <h3 class="sub-heading">our Leg Pads</h3>
        <h1 class="heading">Recommended Leg Pads</h1>
    
        <div class="box-container">
            <?php
                include_once("render_products3.php");
            ?>
        </div>
    </section>


    <!------------ABOUT US----------------->
    <section class="about" id="about" >
        <h3 class="sub-heading"> About us</h3>
        <h1 class="heading"> Why to choose us?</h1>

        <div class="row">
            <div class="image11">
                <img src="images/aboutimage.jpeg" alt="">
            </div>
            <div class="content">
                <h3>delivering all around the world</h3>
                <p>Over the years SF STANFORD Cricket, 
                manufacturing cricket equipment of very high standard. SF STANFORD is a manufacturing unit and over research, 
                development and structured feedback comes from investing time and money at grass root levels of the game and then working all over the world to bring to you the most innovative and exciting products.</p>
                <p>SF STANFORD philosophy is to use innovative technology,and use latest raw materials and deep knowledge about choosing the right raw materials for our Cricket Equipment.</p>
                <div class="icons-container">
                    <div class="icons11">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons11">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons11">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
            </div>

        </div>
    </section>
       <!-------------------testimonial----------------------------->
    <div class="testimonial">
        <div class="small-container">
            <h3 class="sub-heading"> Customer's review</h3>
            <h1 class="heading"> what they say</h1>
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Over the years SF STANFORD Cricket, 
                        manufacturing cricket equipment of very high standard. 
                        SF STANFORD is a manufacturing unit and over research, 
                        development and structured feedback comes from investing time and money

                    </p>
                    <div class="raiting">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <img src="images/kusal-mendis.webp">
                    <h3>Kusal Mendis</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Over the years SF STANFORD Cricket, 
                        manufacturing cricket equipment of very high standard. 
                        SF STANFORD is a manufacturing unit and over research, 
                        development and structured feedback comes from investing time and money

                    </p>
                    <div class="raiting">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <img src="images/rahmanullah-gurbaz.webp">
                    <h3>Rahmanullah Gurbaz</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Over the years SF STANFORD Cricket, 
                        manufacturing cricket equipment of very high standard. 
                        SF STANFORD is a manufacturing unit and over research, 
                        development and structured feedback comes from investing time and money

                    </p>
                    <div class="raiting">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <img src="images/dhananjaya-de-silva.webp">
                    <h3>Dhananjaya de Silva</h3>
                </div>
            </div>
        </div>
    </div>


    <!-----------------------------footer---------------------------->
    <footer>
    <div class="col">
        <h4>Contact</h4>
        <p>Address: Via Aosta 4, Messina - 98124, Italy</p>
        <p>Phone: +39 3292465237</p>
        <p>Working Hours: 9:00 - 18:00, Monday - Friday</p>
        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <a href="https://www.facebook.com" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/?lang=en" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com" class="fab fa-instagram"></a>
                <a href="https://www.pinterest.com" class="fab fa-pinterest-p"></a>
                <a href="https://www.youtube.com" class="fab fa-youtube"></a>
            </div>
        </div>
    </div>

    <div class="col">
        <h4>Useful links</h4>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="login.html">Sign In</a>
        <a href="registration.html">Sign Up</a>
        <a href="#">Help</a>
    </div>



    <div class="copyright">
        <p>&copy; 2024, Cricket world</p>
    </div>
    </footer>



    <?php 
        include("partials/cart.php");
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
    <script src="admin.js"></script>
    <script src="cart.js"></script>
    <script src="checkout.js"></script>

</body>
</html>