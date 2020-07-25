<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="The Beauty Salon, Book salon at your home in Ranchi, ">
    <meta name="keywords" content="The Beauty Salon, beauty salon in ranchi, home salon in ranchi, home salon at your doorstep, beauty salon at your doorstep with affordable price">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Beauty Salon | Salon at home in Ranchi | salon at your doorstep | home salon </title>
    <link rel="icon" type="icon" href="img\icon.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <?php include'loginPopup.php'; ?>
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt="The Beauty Salon, Salon at your home, Book now"></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>11</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>13</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span><i class="fa fa-inr"></i> 150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/India.png" alt="The Beauty Salon Indian Flag">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Hindi</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#" onclick="openForm()"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index">Home</a></li>
                <li><a href="./services">Services</a></li>
                <li><a href="./blog">Blog</a></li>
                <li><a href="./contact">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> thebeautysalon@gmail.com</li>
                <li>Free one beauty services on booking of <i class="fa fa-inr"></i> 999/- or above</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> thebeautysalon@gmail.com</li>
                                <li>Free one beauty services on booking of <i class="fa fa-inr"></i> 999/- or above</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/India.png" alt="The Beauty Salon Indian Flag">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Hindi</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#" onclick="openForm()"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index"><img src="img/logo.png" alt="The Beauty salon logo"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index">Home</a></li>
                            <li><a href="./services">Services</a></li>
                            <li><a href="./blog">Blog</a></li>
                            <li><a href="./contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>0</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span><i class="fa fa-inr"></i> 00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Banner Begin -->

        <!-- corona Ad -->
        <div class="container">
            <div style="background-image: url(img/first_image.jpg);background-repeat: no-repeat;background-position: center;background-size: cover;">
                <div class="text-center mb-2 pb-2">
                    <h3>In Corona Pandemic , Don't Worry about beauty & care</h3>
                    <h4><b>The Beauty Salon, Salon at your Home</b></h4>
                    <h4><a href="#" class="blink-text" onclick="openForm2()">Book A Serv!ce</a></h4>
                </div>
            </div>
        </div>

    <!-- Banner End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Services</span>
                        </div>
                        <ul>
                            <li><b>Service Rate of parlours</b></li>
                            <li>--------------------</li>
                            <li><b>Parlour -> Service -> Price</b></li>

                            <?php
                            include'action/dbconnection.php';
                                $sql2 = "SELECT parlours.parlour_name,services.name,services.rate FROM services INNER JOIN parlours ON parlours.parlour_id=services.parlour_id WHERE services.availability='Yes' ";
                                $result2 = $con->query($sql2);

                                while($row2 = mysqli_fetch_array($result2)){                            
                            ?>
                            <li><a href="services"><?php echo $row2['parlour_name']; ?> -> <?php echo $row2['name'];?> -> <i class="fa fa-inr"></i> <?php echo $row2['rate'];?></a></li>
                            <?php
                        }
                    ?>
                        </ul>
                    </div>

                    <div class="mt-2">
                        <h4>4 Simple Steps to book A Service at home</h4><hr>
                        <p><b>Step 1.</b> Choose Services</p>
                        <p><b>Step 2.</b> Add it to cart</p>
                        <p><b>Step 3.</b> Proceed to checkout</p>
                        <p><b>Step 4.</b> Make payment</p>
                        <p><span class="text-success">Hey Congrats !</span> you successfully booked a service</p>
                        <p class="font-weight-bold">For More Information Watch this Video</p>
                        <div>
                            <iframe width="" height="" src="https://www.youtube.com/embed/LwsWsDOyUDQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+91 62035 11518</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg mt-1" data-setbg="img/bg-2.jpg">
                        <div class="hero__text">
                            <span class="text-danger">THE BEAUTY SALON</span>
                            <h2>Beauty & care <br/>100% Natural Products</h2>
                            <p>Free one beauty services on booking of <i class="fa fa-inr"></i> 999/- or above</p>
                            <a href="#" class="primary-btn" onclick="openForm2()">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/fruit-facial.jpg">
                            <h5><a href="./services">Fruit Facial</a></h5>
                            <b><del><i class="fa fa-inr"></i> 1199/-</del> <i class="fa fa-inr"></i> 599/- only</b>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/hair-styling.jpg">
                            <h5><a href="./services">Hair Styling</a></h5>
                            <b><del><i class="fa fa-inr"></i> 599/-</del> <i class="fa fa-inr"></i> 299/- only</b>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/waxing.jpg">
                            <h5><a href="./services">Waxing</a></h5>
                            <b><del><i class="fa fa-inr"></i> 799/-</del> <i class="fa fa-inr"></i> 399/- only</b>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/bleach.jpg">
                            <h5><a href="./services">Bleach</a></h5>
                            <b><del><i class="fa fa-inr"></i> 499/-</del> <i class="fa fa-inr"></i> 249/- only</b>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/manicure-pedicure.png">
                            <h5><a href="./services">Manicure-Padicure</a></h5>
                            <p><b><del><i class="fa fa-inr"></i> 1199/-</del> <i class="fa fa-inr"></i> 599/- only</b></p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/tan-removing.jpg">
                            <h5><a href="./services">Tan-Removing</a></h5>
                            <p><b><del><i class="fa fa-inr"></i> 599/-</del> <i class="fa fa-inr"></i> 299/- only</b></p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/aromatherapy.jpg">
                            <h5><a href="./services">Aromatherapy</a></h5>
                            <p><b><del><i class="fa fa-inr"></i> 2499/-</del> <i class="fa fa-inr"></i> 1249/- only</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <!-- <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".Face-care">Face-care</li>
                            <li data-filter=".Hair-care">Hair care</li>
                            <li data-filter=".Body-treatment">Body treatment</li>
                            <li data-filter=".Makeup">Makeup</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix Face-care Hair-care">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-1.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5><i class="fa fa-inr"></i> 30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Body-treatment Makeup">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-2.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5><i class="fa fa-inr"></i> 30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Body-treatment Hair-care">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-3.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5><i class="fa fa-inr"></i> 30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Makeup Face-care">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-4.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5><i class="fa fa-inr"></i> 30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Hair-care Body-treatment">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-5.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5><i class="fa fa-inr"></i> 30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Face-care Makeup">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-6.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5><i class="fa fa-inr"></i> 30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Hair-care Body-treatment">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-7.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5><i class="fa fa-inr"></i> 30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Makeup Body-treatment">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-8.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5><i class="fa fa-inr"></i> 30.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 p-2">
                    <div class="banner__pic">
                        <a href="#"><img src="img/massage&spa.jpg" alt="The Beauty Salon massage & spa"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 p-2">
                    <div class="banner__pic">
                        <a href="#"><img src="img/hair-styling2.jpg" alt="The Beauty Salon Hair styling coloring"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>VLCC Skin Care</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS5xxXhlcxQDlGojWooZ7ijLUt3IWdTqPmhGA&usqp=CAU" alt="The Beauty Salon VLCC Fruit Cleanup" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>VLCC Fruit Cleanup</h6>
                                        <span><i class="fa fa-inr"></i> 599.00 only</span>
                                        <!-- <button style="background-color: #6aff00;" id="add-to-cart">Add to cart</button> -->                                        
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSQkne3RqaRrkTLRZHshIdmeRJHxZ5tYnUrAA&usqp=CAU" alt="The Beauty Salon VLCC Anti-tan Cleanup" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>VLCC Anti-tan Cleanup</h6>
                                        <span><i class="fa fa-inr"></i> 799.00 only</span>
                                        <!-- <button style="background-color: #6aff00;" id="add-to-cart">Add to cart</button> -->
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSs5UXN-qixG8GfvR_EEtz4f3c9yRQVVtnMWA&usqp=CAU" alt="The Beauty Salon Shahnaz Whitening Cleanup" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Shahnaz Whitening Cleanup</h6>
                                        <span><i class="fa fa-inr"></i> 899.00 only</span>
                                        <!-- <button style="background-color: #6aff00;" id="add-to-cart">Add to cart</button> -->
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://ds393qgzrxwzn.cloudfront.net/resize/m600x500/cat1/img/images/0/kATemuwCyQ.jpg" alt="The Beauty Salon Fruit Facial - 5 Step" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Fruit Facial - 5 Step</h6>
                                        <span><i class="fa fa-inr"></i> 599.00 only</span>
                                        <!-- <button style="background-color: #6aff00;" id="add-to-cart">Add to cart</button> -->
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://lassvogue.files.wordpress.com/2015/07/glowing-skin.jpg" alt="The Beauty Salon Insta Glow Facial" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Insta Glow Facial</h6>
                                        <span><i class="fa fa-inr"></i> 699.00 only</span>
                                        <!-- <button style="background-color: #6aff00;" id="add-to-cart">Add to cart</button> -->
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://previews.123rf.com/images/plepraisaeng/plepraisaeng1709/plepraisaeng170900020/85569679-happy-relax-woman-getting-gold-facial-mask-at-beauty-salon-.jpg" alt="The Beauty Salon Gold Facial" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Gold Facial</h6>
                                        <span><i class="fa fa-inr"></i> 999.00 only</span>
                                        <!-- <button style="background-color: #6aff00;" id="add-to-cart">Add to cart</button> -->
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Lotus & shahnaz Skin Care</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://n1.sdlcdn.com/imgs/a/t/q/Lotus-Herbals-Combo-Of-Facial-SDL988805262-1-c6790.jpg" alt="The Beauty Salon Lotus White Glow 4 Step Facial" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lotus White Glow 4 Step Facial</h6>
                                        <span><i class="fa fa-inr"></i> 999.00 only</span>
                                        <!-- <button style="background-color: #6aff00;" id="add-to-cart">Add to cart</button> -->
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://rukminim1.flixcart.com/image/352/352/jjg15zk0/facial-kit/w/t/4/40-safe-sun-anti-tan-whitening-and-glow-facial-kit-160-g-set-of-original-imaezxfjhxchraha.jpeg?q=70" alt="The Beauty Salon Lotus Anti Tan 5 Step Facial" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lotus Anti Tan 5 Step Facial</h6>
                                        <span><i class="fa fa-inr"></i> 899.00 only</span>
                                        <!-- <button style="background-color: #6aff00;" id="add-to-cart">Add to cart</button> -->
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://res.sastasundar.com/incom/images/product/Lotus-Cellular-Glow-Facial-Kit-Radiant-Gold-1525262661-10040400.jpg" alt="The Beauty Salon Lotus Radiant Gold 4 Step Facial" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lotus Radiant Gold 4 Step Facial</h6>
                                        <span><i class="fa fa-inr"></i> 999.00 only</span>
                                        <!-- <button style="background-color: #6aff00;" id="add-to-cart">Add to cart</button> -->
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://stylesatlife.com/wp-content/uploads/2018/01/Shahnaz-Husain-Gold-Facial-Kit.jpg" alt="The Beauty Salon Shahnaz Professional Power - whitening 7 Step Facial" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Shahnaz Gold Facial Shahnaz</h6>
                                        <span><i class="fa fa-inr"></i> 1199.00 only</span>
                                        <!-- <button style="background-color: #6aff00;" id="add-to-cart">Add to cart</button> -->
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://dmcnqxtiij3ez.cloudfront.net/catalog/product/cache/cf3f2243ef4940fd5c66f2ff035145ac/f/1/f1530_1_professional_power_skin_whitening_treatment_7_step_facial_kit_48_gms._15ml.jpg" alt="The Beauty Salon Shahnaz Gold Facial" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Professional Power - whitening 7 Step Facial</h6>
                                        <span><i class="fa fa-inr"></i> 1299.00 only</span>
                                        <!-- <button style="background-color: #6aff00;" id="add-to-cart">Add to cart</button> -->
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTpHQBu9PlCBLLKNg0A5m7nUv8Vc68_zESy2Q&usqp=CAU" alt="The Beauty Salon SARA D-TAN Radiance Facial" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>SARA D-TAN Radiance Facial</h6>
                                        <span><i class="fa fa-inr"></i> 1299.00 only</span>
                                        <!-- <button style="background-color: #6aff00;" id="add-to-cart">Add to cart</button> -->
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Mani-Pedi & Hair Care</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://de927adv5b23k.cloudfront.net/wp-content/uploads/2018/05/14162352/Manicure_DIY_Natural_Ingredients.jpg" alt="The Beauty Salon Fruit Manicure Padicure" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Fruit Manicure Padicure</h6>
                                        <span><i class="fa fa-inr"></i> 799.00 only</span>
                                        <!-- <button style="background-color: #6aff00;" id="add-to-cart">Add to cart</button> -->
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://www.imperialsalonandspa.com/images/posts/768-576/soothing_almond_mani_pedi.jpg" alt="The Beauty Salon Soothing Manicure Padicure" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Soothing Manicure Padicure</h6>
                                        <span><i class="fa fa-inr"></i> 899.00 only</span>
                                        <!-- <button style="background-color: #6aff00;" id="add-to-cart">Add to cart</button> -->
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img\manicure-pedicure.png" alt="The Beauty Salon Anti-tan Manicure Padicure" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Anti-tan Manicure Padicure</h6>
                                        <span><i class="fa fa-inr"></i> 999.00 only</span>
                                        <!-- <button style="background-color: #6aff00;" id="add-to-cart">Add to cart</button> -->
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://i.ytimg.com/vi/diC3EgTXU60/maxresdefault.jpg" alt="The Beauty Salon Loreal Hair Spa" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Loreal Hair Spa</h6>
                                        <span><i class="fa fa-inr"></i> 999.00 only</span>
                                        <!-- <button style="background-color: #6aff00;" id="add-to-cart">Add to cart</button> -->
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://www.matrix.com/~/media/matrix%20us%20media%20library/blogs/2018may/highlights-dark-hair/highlight-ideas-for-dark-hair.jpg" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Loreal Hair coloring</h6>
                                        <span><i class="fa fa-inr"></i> 1299.00 only</span>
                                        <!-- <button style="background-color: #6aff00;" id="add-to-cart">Add to cart</button> -->
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://www.fasttw.com/wp-content/uploads/2019/05/intro.jpg" alt="The Beauty Salon Salon range 3 Step cut" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Salon range 3 Step cut</h6>
                                        <span><i class="fa fa-inr"></i> 399.00 only</span>
                                        <!-- <button style="background-color: #6aff00;" id="add-to-cart">Add to cart</button> -->
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From Our Guest</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 24,2020</li>
                                <li><i class="fa fa-comment-o"></i> 1</li>
                                <li class="text-danger"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                            </ul>
                            <h5><a href="#">Poonam , Harmu Road</a></h5>
                            <p>Amazing experience, first time in ranchi, salon at home service, it's awesome, best price. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog-5.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> may 12,2020</li>
                                <li><i class="fa fa-comment-o"></i> 1</li>
                                <li class="text-danger"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                            </ul>
                            <h5><a href="#">Neha, Doranda</a></h5>
                            <p>Great experience, best services by the beauty salon professionals, affordable price </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2020</li>
                                <li><i class="fa fa-comment-o"></i> 1</li>
                                <li class="text-danger"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                            </ul>
                            <h5><a href="#">Anushka, Main road</a></h5>
                            <p>Good service, best price no hidden charge, exclusive customer support executive, quick responce </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: Harmu Road, Ranchi, Pin-834005</li>
                            <li>Phone: +91 62035 11518</li>
                            <li>Email: thebeautysalon@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                            <li><a href="#">Admin Login</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="parlour_login">Parlour Login</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest services and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p>Copyright &copy;2020 All rights reserved | Made in India with <i class="fa fa-heart text-danger"></i> by <a href="https://www.thebeautysalon.com" target="_blank">The Beauty Salon</a></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt="The Beauty Salon Payment service image"></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>