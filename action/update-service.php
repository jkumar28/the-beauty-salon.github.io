<?php 
								//servicve update is done through this page
	include'dbconnection.php';
	session_start();
	if($_SESSION['is_login']) {
        //keep user on page
        $mobile = $_SESSION['mobile'];
    }else{
        //redirect to login
        header("Location: ../parlour_login");
    }

    $service_id = $_GET['service_id'];
	$sql_update = "SELECT * FROM `services` WHERE `service_id` = '$service_id' ";
	$result_update = $con->query($sql_update);
	$row3 = $result_update->fetch_assoc();

	if(isset($_POST['submit2'])){
		$name = $_POST['name'];
        $rate = $_POST['rate'];
        $duration = $_POST['duration'];
        $description = $_POST['description'];

		$sql_update = "UPDATE `services` SET `name` = '$name', `rate` = '$rate', `duration` = '$duration', `description` = '$description'  WHERE `service_id` = $service_id";
		$result_update = $con->query($sql_update);
		if($result_update === true){
			header('Location:../dashboard_parlour');
		}
		else{
			echo $con->error;
		}
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
    <link rel="icon" type="icon" href="..\img\icon.png">

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!-- JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</head>
<body>

	<a href="../dashboard_parlour"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/><path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg></a>

	<div class="container col-md-4"> 

	    <form class="row g-3" method="POST" action="">
			
			<div class="col-md-12">
	          <label for="name">Service Name</label>
	          <input class="form-control" type="text" name="name" value="<?php echo $row3['name']; ?>" placeholder="Enter Service name*" required>
	        </div>

	        <div class="col-md-12">
	          <label for="rate">Rate</label>
	          <input class="form-control" type="text" name="rate" value="<?php echo $row3['rate']; ?>" placeholder="Enter Rate* eg: 499 " required>
	        </div>

	        <div class="col-md-12">
	          <label for="duration">Time Duration</label>
	          <input class="form-control" type="text" name="duration" value="<?php echo $row3['duration']; ?>" placeholder="time to complete this service* eg: 20 minute" required>
	        </div>

	        <div class="col-md-12">
	          <label for="description">Work Description</label>
	          <input class="form-control" type="text" name="description" value="<?php echo $row3['description']; ?>" placeholder="Details about this service">
	        </div>

	        <div class="col-md-12">
	        	<input type="hidden" name="service_id" value="<?php echo $row3['service_id']; ?>">
	          <input class="btn btn-warning form-control" type="submit" name="submit2" value="Update Service">
	        </div>
	    </form>				
	</div>

</body>
</html>