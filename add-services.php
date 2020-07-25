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
    $parlour_id = $_GET['parlour_id'];
    // $mobile = $_GET['mobile'];
    $sql1 = "SELECT * FROM `parlours` WHERE `mobile` = '$mobile' AND `status`='1' ";
    $result = $con->query($sql1);
    $row = $result->fetch_assoc();


    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $rate = $_POST['rate'];
        $duration = $_POST['duration'];
        $description = $_POST['description'];

        $files = $_FILES['files'];

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

        // $sql_update = "UPDATE `services` SET `name` = '$name', `rate` = '$rate', `duration` = '$duration', `description` = '$description', `files` = '$destinationfile'  WHERE `service_id` = $service_id";

        $sql = " INSERT INTO `services`(`parlour_id`, `name`, `rate`, `duration`, `description`, `files`) VALUES ('$parlour_id','$name','$rate','$duration','$description','$destinationfile') " ;

        if($con->query($sql) === true){
            echo '<script language="javascript">';
            echo 'alert("One new service added sucessfully")';
            echo '</script>';
            
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Something went wrong, please report to Developer")';
            echo '</script>';
        }  ?>
        <script>
        	window.location.href=window.location.href;  //for page refresh 
        </script>

        <?php 
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

	
	<a href="dashboard_parlour"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/><path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg></a>

  	<div class="container pt-2">
		
	      <h4 class="text-center">Add Services</h4><hr>

	      <form class="row g-3" enctype="multipart/form-data" method="POST" action="#">
			
			<div class="col-md-3">
			  <label for="parlour_id">Parlour Id</label>
	          <input class="form-control" type="text" name="parlour_id" value="<?php echo("$parlour_id") ?>" disabled>
	        </div>

	        <div class="col-md-3">
	          <label for="name">Service Name</label>
	          <input class="form-control" type="text" name="name" placeholder="Enter Service name*" required>
	        </div>

	        <div class="col-md-3">
	          <label for="rate">Rate</label>
	          <input class="form-control" type="text" name="rate" placeholder="Enter Rate* eg: 499 " required>
	        </div>

	        <div class="col-md-3">
	          <label for="duration">Time Duration</label>
	          <input class="form-control" type="text" name="duration" placeholder="time to complete this service* eg: 20 minute" required>
	        </div>

	        <div class="col-md-4">
	          <label for="description">Work Description</label>
	          <textarea class="form-control" type="text" name="description" placeholder="Details about this service" required></textarea>
	        </div>
	        

	        <div class="col-md-6">
	            <label for="files">Image</label>
	            <input class="" type="file" name="files" onchange="loadfile(event)">

	            <img src="" id="img_preview" width="100" height="100">
	            <script type="text/javascript">
	                function loadfile(event){
	                    var output = document.getElementById('img_preview');
	                    output.src = URL.createObjectURL(event.target.files[0]);
	                }
	            </script>
	        </div>

	        <div class="col-md-2">
	          <input class="btn btn-primary form-control" type="submit" name="submit" value="Add Service">
	        </div>
	      </form>
<br>
		<!-- ----------for display services--------------- -->
		
		<h4 class="text-center">All Services</h4>
		<div class="col-md-12">
			<table class="table table-bordered table-striped text-center">
				<tr> 
					<th>No.</th>
					<!-- <th>Parlour Id</th> -->
					<th>Service Name</th>
					<th>Rate</th>
					<th>Service Time</th>
					<th>Availability</th>
					<th>Action</th>
					<th>Image</th>
					
				</tr>

			<?php
				
			    $sql2 = "SELECT * FROM `services` WHERE `parlour_id` = '$parlour_id' AND `availability`='Yes' ";
			    $result2 = $con->query($sql2);
				if(mysqli_num_rows($result2)>0){
					$number = 1;
					while($row2 = mysqli_fetch_array($result2)){
			?>

				<tr>
					<td><?php echo "$number"; ?></td>
					<!-- <td><?php echo $row2['parlour_id']; ?></td> -->
					<td><?php echo $row2['name']; ?></td>
					<td><i class="fa fa-inr"></i> <?php echo $row2['rate']; ?></td>
					<td><?php echo $row2['duration']; ?></td>
					<td><?php echo $row2['availability']; ?></td>
					<td>
						<a href="action/update-service?service_id=<?php echo $row2['service_id'];?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;<a href="action/login_action?service_id=<?php echo $row2['service_id'];?>"><i class="fa fa-trash"></i></a>
					</td>
					<td><img src="<?php echo $row2['files']; ?>" width="100" height="50"></td>
					
				</tr>
			<?php
				$number++;
				}
			}
			?>
			</table>
		</div>
  	</div>

</body>
</html>