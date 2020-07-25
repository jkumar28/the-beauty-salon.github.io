<?php
	session_start();
    error_reporting(0);
	include'action/dbconnection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="description" content="The Beauty Salon, Book salon at your home in Ranchi, ">
    <meta name="keywords" content="The Beauty Salon, beauty salon in ranchi, home salon in ranchi, home salon at your doorstep, beauty salon at your doorstep with affordable price">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Beauty Salon | Salon at home in Ranchi | salon at your doorstep | home salon </title>
    <link rel="icon" type="icon" href="img\icon.png">

    <!-- Google Font -->
<!--  -->

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <?php include'loginPopup.php';?>
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
                <li><a href="#"><i class="fa fa-shopping-cart"></i>&nbsp;<span id="cart-item">0</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span><i class="fa fa-inr">&nbsp;</i>00</span></div>
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
                            <li><a href="#"><i class="fa fa-shopping-cart"></i>&nbsp;<span id="cart-item">0</span></a></li>
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

    <!-- Banner Begin -->  <!-- corona Ad -->
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
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <div class="container">
        <div class="row">
            <div class="col-md-2" style="background-color: lightgrey;">
                <div class="ml-2">
                    <h4 class=" m-2 text-success" style="text-shadow: 2px 2px #ff0000;"><b>Parlours</b></h4><hr>
                        <?php
                            $displayParlourQuery = "SELECT * FROM `parlours` WHERE `status` = 1";
                            $result3 = $con->query($displayParlourQuery);
                            while($row3 = mysqli_fetch_array($result3)){    
                        ?>
                            <p style="text-shadow: 2px 0px white;"><a href="services?parlour_id=<?php echo $row3['parlour_id']; ?>" class="font-weight-bold text-capitalize text-dark"><?php echo $row3['parlour_name']; ?></a></p>
                        <?php
                            }
                        ?>     
                </div>
            </div>
            <div class="col-sm-10 col-md-10 col-lg-10">
                <table class="table table-striped text-center">
                    <tr> 
                        <th>No.</th>
                        <th>Image</th>
                        <th>Service Name</th>
                        <th>Rate</th>
                        <th>Service Time</th>
                        <!-- <th>Details</th> -->
                        <th></th>
                        
                    </tr>

                <?php
                    $parlour_id = $_GET['parlour_id'];
                    $sql2 = "SELECT * FROM `services` WHERE `parlour_id` = '$parlour_id' AND `availability`='Yes' ";
                    $result2 = $con->query($sql2);
                    if(mysqli_num_rows($result2)>0){
                        $number = 1;
                        while($row2 = mysqli_fetch_array($result2)){
                ?>

                    <tr>
                        <td><?php echo "$number"; ?></td>
                        <td><img src="<?php echo $row2['files']; ?>" width="100" height="70"></td>
                        <td><?php echo $row2['name']; ?></td>
                        <td><i class="fa fa-inr"></i> <?php echo $row2['rate']; ?></td>
                        <td><?php echo $row2['duration']; ?></td>
                        <!-- <td><?php echo $row2['description']; ?></td> -->
                        <td>
                            <a class="btn btn-success" href="action/add-to-Cart?service_id=<?php echo $row2['service_id'];?>" ><i class="fa fa-cart-plus"></i>&nbsp; Add to cart</a>
                        </td>
                        
                    </tr>
                <?php
                    $number++;
                    }
                }
                ?>
                </table>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div>
            <div class="col-md-12 col-lg-12">
                <div class="product__details__pic">
                    <div class="product__details__pic__slider owl-carousel">
                        <?php
                            $sql = "SELECT `files` FROM services WHERE availability = 'yes'";
                            $result = $con->query($sql);
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <img src="<?php echo $row['files']; ?>" alt="The Beauty Salon, Salon at home" width="130" height="100">
                        
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__slider owl-carousel">
                        <img data-imgbigurl="img/product/details/product-details-2.jpg"
                            src="img/product/details/thumb-1.jpg" alt="">
                        <img data-imgbigurl="img/product/details/product-details-3.jpg"
                            src="img/product/details/thumb-2.jpg" alt="">
                    </div>
                </div>
            </div> -->
        </div>
    </div>
            


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

	<script type="text/javascript">
	$(document).ready(function(){
		$(".addItemBtn").click(function(e){
			//e.preventDefault();
			var $form = $(this).closest(".form-submit");
			var pid = $form.find(".pid").val();
			var pname = $form.find(".pname").val();
			var pprice = $form.find(".pprice").val();
			var pimage = $form.find(".pimage").val();
			var pcode = $form.find(".pcode").val();

			$.ajax({
				url: 'action.php',
				method:'post',
				data: {pid:pid,pname:pname,pprice:pprice,pimage:pimage,pcode:pcode},
				success:function(response){
					$("#message").html(response);
				}
			});
		});

		load_cart_item_number();

		function load_cart_item_number(){
			$.ajax({
				url: 'action.php',
				method: 'get',
				data: {cartItem:"cart_item"},
				success:function(response){
					$("#cart-item").html(response);
				}
			});
		}
	});
</script>

</body>
</html>