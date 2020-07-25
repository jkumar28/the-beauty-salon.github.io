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

   $query1 = "SELECT `total_employee` FROM `parlours` WHERE parlour_id= $parlour_id ";

    // $sql1 = "SELECT * FROM `parlours` WHERE `mobile` = '$mobile' AND `status`='1' ";
    // $result = $con->query($sql1);
    // $row = $result->fetch_assoc();

    if(isset($_POST['submit'])){

        $emp_name = $_POST['emp_name'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];
        $alt_number = $_POST['alt_number'];
        $email = $_POST['email'];
        $speciality = $_POST['speciality'];

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

        // $sql_update = "UPDATE `employee` SET `emp_name` = '$emp_name', `address` = '$address', `mobile` = '$mobile', `alt_number` = '$alt_number', `files` = '$destinationfile'  WHERE `service_id` = $service_id";

        $sql = " INSERT INTO `employee`(`parlour_id`, `emp_name`, `address`, `mobile`, `alt_number`, `email`, `speciality`, `files`) VALUES ('$parlour_id','$emp_name','$address','$mobile','$alt_number','$email','$speciality','$destinationfile') " ;

        if($con->query($sql) === true){

            echo '<script language="javascript">';
            echo 'alert("Beautician added sucessfully")';
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

</head>
<body>
	<a href="dashboard_parlour"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/><path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg></a>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-6" style="border: 1px solid red;">
					<div class="row">
						<div class="col-md-6"><h4 class="text-danger">Add Beautician</h4></div>
						<div class="col-md-6"><a class="float-right text-success" href="tel:+916203511518">Click hre for technical support</a></div>
					</div>
					<hr>
					<div>
						<form enctype="multipart/form-data" method="POST" action="#">
							<div class="p-1">
								<label for="parlour_id">Parlour Id</label>
								<input class="form-control" type="text" name="parlour_id" value="<?php echo("$parlour_id") ?>" disabled>
							</div>
							<div class="p-1">
								<label for="emp_name">Beautician Name</label>
								<input class="form-control" type="text" name="emp_name" placeholder="Beautician Name*" required>
							</div>
							<div class="p-1">
								<label for="address">Address</label>
								<input class="form-control" type="text" name="address" placeholder="Enter Full Address*" required>
							</div>
							<div class="p-1">
								<label for="mobile">Mobile</label>
								<input class="form-control" type="text" name="mobile" placeholder="Mobile No.*" required maxlength="10">
							</div>
							<div class="p-1">
								<label for="alt_number">Alternate Number</label>
								<input class="form-control" type="text" name="alt_number" placeholder="Alternate Number (Optional)">
							</div>
							<div class="p-1">
								<label for="email">Email Id</label>
								<input class="form-control" type="email" name="email" placeholder="email id (Optional)">
							</div>
							<div class="p-1">
								<label for="speciality">Speciality</label>
								<textarea class="form-control text-capitalize" type="text" name="speciality" placeholder="type something about Beautician Professional Experience"></textarea>
							</div>
							
							<div class="p-1">
					            <label for="files"></label>
					            <input class="" type="file" name="files" onchange="loadfile(event)">

					            <img src="" id="img_preview" width="120" height="100">
					            <script type="text/javascript">
					                function loadfile(event){
					                    var output = document.getElementById('img_preview');
					                    output.src = URL.createObjectURL(event.target.files[0]);
					                }
					            </script>
					        </div>

					        <div class="pt-2 pr-5 pl-5 pb-2">
					        	<input type="submit" name="submit" value="Add Beautician" class="form-control btn btn-success">
							</div>
						</form>
					</div>
				</div>

				<div class="col-md-6" style="border: 1px solid red;">
					<h3>Terms & Condition</h3><hr>
					<div class="text-justify">
						<ul>
							<li>All beautician should be expert, professional and experienced.</li><br>
							<li>सभी ब्यूटीशियन को विशेषज्ञ, पेशेवर और अनुभवी होना चाहिए।</li><br>
							<li>No criminal background should be associated with any of beautician.</li><br>
							<li>कोई भी आपराधिक पृष्ठभूमि किसी भी ब्यूटीशियन के साथ नहीं जुड़ी होनी चाहिए।</li><br>
							<li>Parlours must take every beautician's id and address proof.</li><br>
							<li>पार्लरों को हर ब्यूटीशियन का आईडी और एड्रेस प्रूफ लेना होगा।</li><br>
							<li>If any customer wants to add more services at the time of taking service then, service will provide by the beautician.</li><br>
							<li>यदि कोई भी ग्राहक सेवा लेने के समय अधिक सेवाओं को जोड़ना चाहता है, तो ब्यूटीशियन द्वारा सेवा प्रदान की जाएगी।</li><br>
							<li>Extra service charge should be initiate by digital mode.</li><br>
							<li>अतिरिक्त सेवा शुल्क को डिजिटल मोड द्वारा आरंभ किया जाना चाहिए।</li><br>						
							<li>Don't be friendship to any customer by the beautician.</li><br>						
							<li>ब्यूटीशियन द्वारा किसी भी ग्राहक से दोस्ती न करें।</li><br>

						</ul>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="" style="border: 1px solid red;">
					<div class="">
						<table class="table table-bordered table-striped text-center table-responsive">
							<tr> 
								<th>S.No</th>
								<!-- <th>Parlour Id</th> -->
								<th>Beautician Name</th>
								<th>Address</th>
								<th>Mobile</th>
								<th>Speciality</th>
								<th>Action</th>
								<th>Image</th>
								
							</tr>

						<?php
							
						    $sql2 = "SELECT * FROM `employee` WHERE `parlour_id` = '$parlour_id' AND `status`='1' ";
						    $result2 = $con->query($sql2);
							if(mysqli_num_rows($result2)>0){
								$number = 1;
								while($row2 = mysqli_fetch_array($result2)){
						?>

							<tr>
								<td><?php echo "$number"; ?></td>
								<!-- <td><?php echo $row2['parlour_id']; ?></td> -->
								<td><?php echo $row2['emp_name']; ?></td>
								<td><?php echo $row2['address']; ?></td>
								<td><?php echo $row2['mobile']; ?></td>
								<td><?php echo $row2['speciality']; ?></td>
								<td>
									<a href="" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;<a href="action/login_action?employee_id=<?php echo $row2['employee_id'];?>"><i class="fa fa-trash"></i></a>
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
			</div>

			
		</div>
	</section>
<br><br>
</body>
</html>