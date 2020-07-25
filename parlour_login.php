<?php 
	
	session_start();
	include('action/dbconnection.php');

	if(!isset($_SESSION['is_login'])){

		if(isset($_POST['submit2'])){                 //query for login check 
			$mobile = $_POST['mobile'];
			$password = $_POST['password'];

			$sql = "SELECT * FROM `parlours` WHERE `mobile`= '$mobile' AND `password` = '$password'";
			$result = $con->query($sql);
			if($result->num_rows > 0){

				$_SESSION['is_login'] = true;
                $_SESSION['mobile'] = $mobile;
                
				header('Location:dashboard_parlour');
				// echo "login success";
                echo '<script language="javascript">';
                echo 'alert("successfully loged in")';
                echo '</script>';
			}
			else{
				// echo "Error:".$sql."<br>".$conn->error;
				echo '<script language="javascript">';
	            echo 'alert("Incorrect Mobile or Password")';
	            echo '</script>';
			}
		}
	}else{
        echo "Error:".$sql."<br>".$conn->error;
        //header("Location: logout");
    }
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
                <a href="#" onclick="openForm()"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index">Home</a></li>
                <!-- <li><a href="./shop-grid">Shop</a></li> -->
                <li><a href="services">Services</a></li>
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
                                <img src="img/India.png" alt="The Beauty Salon , salon at your home, home salon in ranchi">
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
                        <a href="./index"><img src="img/logo.png" alt="The Beauty salon, salon at your home, book now"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index">Home</a></li>
                            <!-- <li><a href="./shop-grid">Shop</a></li> -->
                            <li><a href="services">Services</a></li>
                            <li><a href="./blog">Blog</a></li>
                            <li><a href="./contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Corona Offer Begin -->
<!-- 	<style>
	    .blink-text{
	    color: #000;
	    font-weight: bold;
	    font-size: 2rem;
	    animation: blinkingText 2s infinite;
	    }
	    @keyframes blinkingText{
	      0%    { color: blue;}
	      25%   { color: transparent;}
	      50%   { color: red;}
	      75%   { color: transparent;}
	      100%  { color: red;}
	    }
	</style> -->
    <div class="container">
        <div style="background-image: url(img/first_image.jpg);background-repeat: no-repeat;background-position: center;background-size: cover;">
            <div class="text-center mb-2 pb-2">
                <h3>In Corona Pandemic , Don't Worry about beauty & care</h3>
                <h4><b>The Beauty Salon, Salon at your Home</b></h4>
                <h4><a href="#" class="blink-text" onclick="openForm2()">Book A Serv!ce</a></h4>
            </div>
        </div>
    </div>
    <!-- Corona Offer End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Services</span>
                        </div>
                        <ul>
                            <li><a href="#">Aromatherapy</a></li>
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
                    <div class="hero__item set-bg" data-setbg="img/bg-2.jpg">
                        <div class="hero__text">
                            <span class="text-danger">THE BEAUTY SALON</span>
                            <h2>Beauty & care <br/>100% Natural Products</h2>
                            <p>Free one beauty services on booking of <i class="fa fa-inr"></i> 999/- or above</p>
                            <a href="#" class="primary-btn">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

	<!-- Parlour login section begin -->
	<section>
		<div class="container">
			<div align="center">
				<div class="col-md-4">
					<div class="card-header bg-transparent">
						<h3 class="text-center font-weight-bold">Parlour Login</h3>
					</div>
					<div class="card-body">

						<form id="parlour-login-form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" >
							<div class="form-group row">
								<div class="col-md-12">
								<input type="text" name="mobile" placeholder="Enter mobile" class="form-control" required maxlength="10">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-12">
									<input type="password" name="password" placeholder="Enter Password" class="form-control" required>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-12">
									<a href="#" class="bg-primary text-white m-2 pl-2 pr-2" style="float: left;" onclick="signup2()">Signup</a>
									<a href="#" class="bg-danger text-white m-2 pl-2 pr-2" style="float: right;">Forgot Password</a>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-12">
									<input type="submit" id="submit2" class="form-control btn-success" name="submit2" value="Login">
								</div>
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Parlour login section end -->

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

<style>
  body {}
  * {box-sizing: border-box;}

  /* Button used to open the contact form - fixed at the bottom of the page */
  .open-button {
    background-color: #555;
    color: white;
    padding: 8px 10px;
    border: none;
    cursor: pointer;
    opacity: 0.8;
    position: fixed;
    bottom: 23px;
    right: 28px;
    width: 280px;
  }

  /* The popup form - hidden by default */
  .form-popup {
    display: none;
    position: fixed;
    bottom: 0;
    right: 15px;
    border: 2px solid #f1f1f1;
    z-index: 9;
  }

  /* Add styles to the form container */
  .form-container {
    max-width: 300px;
    padding: 10px;
    background-color: white;
  }

  /* Full-width input fields */
  .form-container input[type=text], .form-container input[type=password], .form-container input[type=email] {
    width: 100%;
    padding: 5px;
    margin: 5px 0 5px 0;
    border: none;
    background: #f1f1f1;
  }

  /* Set a style for the submit/login button */
  .form-container .btn {
    background-color: #4CAF50;
    color: white;
    padding: 10px 8px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom:10px;
    opacity: 0.8;
  }

  /* Add a red background color to the cancel button */
  .form-container .cancel {
    background-color: red;
  }

  /* Add some hover effects to buttons */
  .form-container .btn:hover, .open-button:hover {
    opacity: 1;
  }
</style>

<!-- --------------------------Sign-Up------------------------------------- -->
<div class="form-popup" id="signup2">
  	<form action="#" method="POST" class="form-container">
	    <h3>Parlour SignUp</h3>

	    <input type="text" placeholder="Enter parlour Name" name="parlour_name" required>

	    <input type="text" placeholder="Enter Mobile" name="mobile" required maxlength="10">

	    <input type="password" placeholder="Choose your Password" name="password" required>
	    <input type="password" placeholder="Confirm Password" name="Cpassword" required>

		<input type="submit" name="submit" class="btn" value="Signup">
	    <button type="button" class="btn cancel" onclick="closeForm4()">Close</button>
  	</form>
</div>

<script type="text/javascript">         // send parlour login form data through Ajax
    
    $(document).ready(function(){
        var form = $('#parlour-login-form');
        $('#submit2').click(function(){
            $.ajax({
                url: form.attr("action"),
                type: 'post',
                data: $("#parlour-login-form input").serialize(),
                success: function(data){
                    console.log(data);
                }
            });
        });
    });
</script>

<script>
// ======================Sign-Up============================
function signup2() {
  document.getElementById("signup2").style.display = "block";
}
function closeForm4() {
  document.getElementById("signup2").style.display = "none";
}
</script>


<?php
	
    //============signup query============

	if(isset($_POST['submit'])){
		
		$parlour_name = mysqli_real_escape_string($con,$_POST['parlour_name']);
		$mobile = mysqli_real_escape_string($con,$_POST['mobile']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
		$Cpassword = mysqli_real_escape_string($con,$_POST['Cpassword']);

		$mobile_query = "select * from parlours where mobile = '$mobile' " ;
        $m_query = mysqli_query($con,$mobile_query);
        $mobile_count = mysqli_num_rows($m_query);

        if($mobile_count > 0)
        {
        	echo '<script language="javascript">';
            echo 'alert("This Mobile number is already register, please login !")';
            echo '</script>';
        }
        elseif($password === $Cpassword)
        {
        	$sql = "INSERT INTO `parlours`(`parlour_name`, `mobile`, `password`) VALUES ('$parlour_name','$mobile','$password')";

			$query = mysqli_query($con,$sql);

            echo '<script language="javascript">';
            echo 'alert("Signup successfully")';
            echo '</script>';
        }
        else
        {
        	echo '<script language="javascript">';
            echo 'alert("Password do not match")';
            echo '</script>';
        }
			
	}
?>