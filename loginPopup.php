<?php 
  include'action/dbconnection.php';
  //------------Customer login and Check-------------------
  if(!isset($_SESSION['is_login'])){

    if(isset($_POST['submitLogin'])){                 //query for login check 
      $mobile = $_POST['mobile'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM `customer` WHERE `mobile`= '$mobile' AND `password` = '$password'";
      $result = $con->query($sql);
      if($result->num_rows > 0){

        $_SESSION['is_login'] = true;
        $_SESSION['mobile'] = $mobile;
                
        header('Location:welcome');
        // echo "login success";
      }
      else{
        // echo "Error:".$sql."<br>".$conn->error;
          echo '<script language="javascript">';
          echo 'alert("Incorrect Mobile or Password")';
          echo '</script>';
        }
      }
    }else{
        header("Location: logout");
    }

  //---------Appointment Booking-----------------

  if(isset($_POST['submitA'])){
    $customer_name = $_POST['customer_name'];
    $service_name = $_POST['service_name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $landmark = $_POST['landmark'];

    $sql = " INSERT INTO `appointment`(`customer_name`, `service_name`, `date`, `time`, `mobile`, `email`, `address`, `landmark`) VALUES ('$customer_name','$service_name','$date','$time','$mobile','$email','$address','$landmark') " ;

    if($con->query($sql) === true){
        echo '<div class="alert alert-success alert-dismissible mt-2">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Appointment Booked Successfully ! <br> Our representative Contact you soon !</strong>
              </div>'; 
      }
      else{
        echo '<div class="alert alert-danger alert-dismissible mt-2">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Something went wrong, Please Try Again...</strong>
              </div>';
      }
  }

  //------------ Customer signup is done here-------------
  if(isset($_POST['submitCustomerSignup'])){
    
    $customer_name = mysqli_real_escape_string($con,$_POST['customer_name']);
    $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $Cpassword = mysqli_real_escape_string($con,$_POST['Cpassword']);

    $mobile_query = "select * from customer where mobile = '$mobile' " ;
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
          $sql = "INSERT INTO `customer`(`customer_name`, `mobile`, `password`) VALUES ('$customer_name','$mobile','$password')";

      $query = mysqli_query($con,$sql);

            echo '<script language="javascript">';
            echo 'alert("Signup successfully !  Please Login ")';
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
  .form-container input[type=text], .form-container input[type=password], .form-container input[type=email], .form-container select[type=select], .form-container input[type=date], .form-container input[type=time] {
    width: 100%;
    padding: 5px;
    margin: 5px 0 5px 0;
    border: 1px solid grey;
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
</style>

<!-- ---------------Appointment-Popup--------------- -->
<div class="form-popup" id="myForm2">
  <form action="#" class="form-container" method="post">
    <h4><b>Book Service at Home</b></h4><br>
    <input type="text" name="customer_name" placeholder="Enter Name*" required>
    <input type="text" name="service_name" placeholder="What service you want, eg: facial, makeup, hair spa" required>
    <input type="date" name="date" placeholder="Choose date*" required>
    <input type="time" name="time" placeholder="choose time*" required>
    <input type="text" name="mobile" placeholder="Mobile number*" required maxlength="10">
    <input type="email" name="email" placeholder="Enter Email (Optional)" >
    <input type="text" name="address" placeholder="Enter full address" required>
    <input type="text" name="landmark" placeholder="Enter Landmark" required>

    <input type="submit" name="submitA" class="btn" value="Book Services">
    <button type="button" class="btn cancel" onclick="closeForm2()">Close</button>
  </form>
</div>

<!-- ----------------------Login----------------------- -->
<div class="form-popup" id="myForm">
  <form action="#" class="form-container" method="post">
    <h3>Login <a href="#" class="blink-text" onclick="signup(); closeForm()">Signup</a></h3><br>
    <input type="text" placeholder="Enter Mobile" name="mobile" required maxlength="10">
    <input type="password" placeholder="Enter Password" name="password" required><br><br>
    <a href="#" class="bg-dark text-white pr-1 pl-1">Forgot Password</a><br><br>
    <input type="submit" name="submitLogin" class="btn" value="Login">
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<!-- --------------------------Sign-Up------------------------------------- -->
<div class="form-popup" id="signup">
  <form action="#" class="form-container" method="post">
    <h3>SignUp <a href="#" class="blink-text" onclick="openForm(); closeForm3()">Login</a></h3><br>

    <input type="text" placeholder="Enter Name" name="customer_name" required>

    <input type="text" placeholder="Enter Mobile" name="mobile" required maxlength="10">

    <input type="password" placeholder="Enter Password" name="password" required>

    <input type="password" placeholder="Confirm Password" name="Cpassword" required>

    <input type="submit" name="submitCustomerSignup" class="btn" value="Signup">
    <button type="button" class="btn cancel" onclick="closeForm3()">Close</button>
  </form>
</div>


<script>
// =======================Login==========================
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

// =====================Appointment========================
function openForm2() {
  document.getElementById("myForm2").style.display = "block";
}
function closeForm2() {
  document.getElementById("myForm2").style.display = "none";
}

// ======================Sign-Up============================
function signup() {
  document.getElementById("signup").style.display = "block";
}
function closeForm3() {
  document.getElementById("signup").style.display = "none";
}
</script>
