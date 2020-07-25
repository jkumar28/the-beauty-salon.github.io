<?php 

// sevice deleted is done via this page 			// service delete hoga , is page se
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

	//$sql_delete = " DELETE FROM `services` WHERE `service_id` = '$service_id' ";

	$sql_delete_service = "UPDATE `services` SET `availability` = 'No' WHERE `service_id` = '$service_id' ";

	$result_delete = $con->query($sql_delete_service);
	if($result_delete === true){

		echo '<script language="javascript">';
        echo 'alert("One service deleted sucessfully")';
        echo '</script>';

		header('Location:../dashboard_parlour');

	}
	else{
		echo $con->error;
	}
	//print_r($id);die;
?>

<?php
	$employee_id = $_GET['employee_id'];

	//$sql_delete = " DELETE FROM `services` WHERE `employee_id` = '$employee_id' ";

	$sql_delete_employee = "UPDATE `employee` SET `status` = '0' WHERE `employee_id` = '$employee_id' ";

	$result_delete = $con->query($sql_delete_employee);
	if($result_delete === true){

		echo '<script language="javascript">';
        echo 'alert("removed sucessful")';
        echo '</script>';

		header('Location:../dashboard_parlour');

	}
	else{
		echo $con->error;
	}
	//print_r($id);die;
?>