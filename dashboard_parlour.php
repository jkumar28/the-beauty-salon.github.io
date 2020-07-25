<?php   
    session_start();
    include('action/dbconnection.php');

    if($_SESSION['is_login']) {
        //keep user on page
        $mobile = $_SESSION['mobile'];
    }else{
        //redirect to login
        header("Location: parlour_login");
    }    

    // if(isset($_POST['submit'])){

    //     $files = $_FILES['files'];

    //     $filename = $files['name'];
    //     $fileerror = $files['error'];
    //     $filetmp = $files['tmp_name'];

    //     $fileext = explode('.',$filename);
    //     $filecheck = strtolower(end($fileext));
    //     $fileextstored = array('png', 'jpg', 'jpeg');

    //     if (in_array($filecheck, $fileextstored)) {
    //         $destinationfile = 'img/'.$filename;
    //         move_uploaded_file($filetmp, $destinationfile); 
    //     }
    //     $sql = "UPDATE `parlours` SET `files` = '$destinationfile' WHERE `mobile` = $mobile";
    //     if($con->query($sql) === true){
    //         echo '<script language="javascript">';
    //         echo 'alert("Photograph uploaded Successfully")';
    //         echo '</script>';
    //     }
    //     else{
    //         echo '<script language="javascript">';
    //         echo 'alert("Somthing went wrong, please report to Developer")';
    //         echo '</script>';
    //     }
    //     header('Location:candidate.php');
    // }

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
            	<li><b class="text-danger">Welcome:</b><b> <?php echo "$mobile"; ?> </b></li>
            	<?php 
                    $sql = "SELECT * FROM `parlours` WHERE mobile = $mobile ";
                    $query = mysqli_query($con,$sql);
                    $i=0;
                    while($res = mysqli_fetch_array($query)){
                ?>
                <li><b class="text-primary"><?php echo $res['parlour_name']; ?></b></li>
                <li><img src="<?php echo $res['files']; ?>" alt="The beauty salon parlour image" style="height: 50px; width: 50px; border-radius: 100%;"></li>
            </ul>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/India.png" alt="The Beauty Salon , salon at your home, home salon in ranchi">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Hindi</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="logout"><i class="fa fa-power-off"></i>Logout</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="./index">Home</a></li>
                <li><a href="#">Edit</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="parlour-member-profile?mobile=<?php echo $res['mobile']; ?>">profile</a></li>
                        
                    </ul>
                </li>
                <li><a href="parlour-beautician?parlour_id=<?php echo $res['parlour_id']; ?>">Beautician</a></li>
                <li><a href="add-services?parlour_id=<?php echo $res['parlour_id']; ?>">Services</a></li>
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
                                <img src="img/India.png" alt="The Beauty Salon , salon at your home, home salon in ranchi">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Hindi</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="logout"><i class="fa fa-power-off"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index"><img src="img/logo.png" alt="The Beauty salon, salon at your home, book now"></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index">Home</a></li>
                            <li><a href="#">Edit</a>
			                    <ul class="header__menu__dropdown">
			                        <li><a href="parlour-member-profile?mobile=<?php echo $res['mobile']; ?>">profile</a></li> 
			                    </ul>
			                </li>
                            <li><a href="parlour-beautician?parlour_id=<?php echo $res['parlour_id']; ?>">Beautician</a></li>
                            <li><a href="add-services?parlour_id=<?php echo $res['parlour_id']; ?>">Services</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-5">
                    <div class="header__cart">
                        <ul>
                        	<li><b class="text-danger">Welcome:</b><b> <?php echo "$mobile"; ?></b> </li>
                        	<li><b class="text-primary"><?php echo $res['parlour_name']; ?></b></li>
                        	<li><img src="<?php echo $res['files']; ?>" alt="The beauty salon parlour image" style="height: 30px; width: 30px; border-radius: 100%;"></li>
			            </ul>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


	<div style="background-color: pink;" class="pt-1" >
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<label>Address: </label>
					<b class="text-primary"><?php echo $res['address']; ?></b>
				</div>
				<div class="col-md-3">
					<label>Landmark: </label>
					<b class="text-primary"><?php echo $res['landmark']; ?></b>
				</div>
				<div class="col-md-3">
					<label>Total Beautician: </label>
					<b class="text-primary"><?php echo $res['total_employee']; ?></b>
				</div>
				<div class="col-md-3">
					<label>Intro: </label>
					<b class="text-primary"><?php echo $res['bio']; ?></b>
				</div>
			</div>
		</div>
	</div>




<?php } ?>


	<br><br><br><br>


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
                            <li><a href="services">Our Services</a></li>
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
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
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