<?php 
include('action/dbconnection.php');
session_start();
    if($_SESSION['is_login']) {
        //keep user on page
        $mobile = $_SESSION['mobile'];
    }else{
        //redirect to login
        header("Location: parlour_login");
    }

    $mobile = $_GET['mobile'];
    $sql1 = "SELECT * FROM `parlours` WHERE `mobile` = '$mobile' AND `status`='1' ";
    $result = $con->query($sql1);
    $row = $result->fetch_assoc();



    if(isset($_POST['submit'])){

        $parlour_name = $_POST['parlour_name'];
        $address = $_POST['address'];
        $landmark = $_POST['landmark'];
        $owner_name = $_POST['owner_name'];
        $alternate_number = $_POST['alternate_number'];
        $email = $_POST['email'];
        $total_employee = $_POST['total_employee'];

        $files = $_FILES['files'];

        $bio = $_POST['bio'];

        $filename = $files['name'];
        $fileerror = $files['error'];
        $filetmp = $files['tmp_name'];

        $fileext = explode('.',$filename);
        $filecheck = strtolower(end($fileext));
        $fileextstored = array('png', 'jpg', 'jpeg');

        if (in_array($filecheck, $fileextstored)) {
            $destinationfile = 'img/'.$filename;
            move_uploaded_file($filetmp, $destinationfile); 
        }
        $sql = "UPDATE `parlours` SET `parlour_name` = '$parlour_name', `address` = '$address', `landmark` = '$landmark', `owner_name` = '$owner_name', `alternate_number` = '$alternate_number', `email` = '$email', `total_employee` = '$total_employee', `files` = '$destinationfile', `bio` = '$bio' WHERE `mobile` = $mobile";
        if($con->query($sql) === true){
            echo '<script language="javascript">';
            echo 'alert("data save sucessfully")';
            echo '</script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Something went wrong, please report to Developer")';
            echo '</script>';
        }
        header('Location:dashboard_parlour');
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

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!-- JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</head>
<body>

  <div><a href="dashboard_parlour"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/><path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg></a></div>

  <div class="container p-5">

      <h4 class="text-center">Edit profile</h4>

      <form class="row g-3" enctype="multipart/form-data" method="POST" action="#">

        <div class="col-md-12">
          <label for="parlour_name">Parlour Name</label>
          <input class="form-control" type="text" name="parlour_name" value="<?php echo $row['parlour_name'] ;?>" placeholder="Enter full parlour_name*" required>
        </div>

        <div class="col-md-12">
          <label for="address">Address</label>
          <input class="form-control" type="text" name="address" value="<?php echo $row['address'] ;?>" placeholder="Enter full address*" required>
        </div>

        <div class="col-md-12">
          <label for="landmark">Landmark</label>
          <input class="form-control" type="text" name="landmark" value="<?php echo $row['landmark'] ;?>" placeholder="Enter Landmark*" required>
        </div>
        <div class="col-md-4">
          <label for="owner_name">Owner Name</label>
          <input class="form-control" type="text" name="owner_name" value="<?php echo $row['owner_name'] ;?>" placeholder="Enter owner name*" required>
        </div>
        <div class="col-md-4">
          <label for="alternate_number">Alternate Number</label>
          <input class="form-control" type="text" name="alternate_number" value="<?php echo $row['alternate_number'] ;?>" placeholder="Alternate Number (optional)">
        </div>
        <div class="col-md-4">
          <label for="email">email</label>
          <input class="form-control" type="email" name="email" value="<?php echo $row['email'] ;?>" placeholder="Email (optional)">
        </div>

        <div class="col-md-2">
          <label for="total_employee">Total Employee</label>
          <input class="form-control" type="text" name="total_employee" value="<?php echo $row['total_employee'] ;?>" placeholder="Total Employee*" required>
        </div>
                
        <div class="col-md-10">
            <label for="files">Image</label>
            <input type="file" name="files" value="<?php echo $row['files'] ;?>" onchange="loadfile(event)">

            <img src="" id="img_preview" width="100" height="100">
            <script type="text/javascript">
                function loadfile(event){
                    var output = document.getElementById('img_preview');
                    output.src = URL.createObjectURL(event.target.files[0]);
                }
            </script>
        </div>

        <div class="col-md-12">
          <label for="bio">Description</label>
          <input class="form-control" name="bio" value="<?php echo $row['bio'] ;?>" placeholder="Intro (optional)"></input>
        </div>
        <div class="col-md-12">
          <input type="hidden" name="mobile" value="<?php echo $mobile; ?>">
          <input class="btn btn-primary" type="submit" name="submit" >
        </div>
      </form>

  </div>

</body>
</html>