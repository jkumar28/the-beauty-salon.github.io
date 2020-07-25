<?php
	session_start();
	error_reporting(0);
	include'action/dbconnection.php';

	if(isset($_POST['pid'])){
		$pid = $_POST['pid'];
		$pname = $_POST['pname'];
		$pprice = $_POST['pprice'];
		$pimage = $_POST['pimage'];
		$pcode = $_POST['pcode'];
		$pqty = 1;

		$stmt = $con->prepare("SELECT service_id FROM cart WHERE service_id =?");
		$stmt->bind_param("i",$pcode);
		$stmt->execute();
		$res = $stmt->get_result();
		$r = $res->fetch_assoc();
		$code = $r['service_id'];

		if(!$code){
			$query = $con->prepare("INSERT INTO `cart`(`name`, `rate`, `files`, `qty`, `total_price`, `service_id`) VALUES (?,?,?,?,?,?)");
			$query->bind_param("sssisi",$pname,$pprice,$pimage,$pqty,$pprice,$pcode);
			$query->execute();

			echo '<div class="alert alert-success alert-dismissible mt-2">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>Item Added to your cart</strong>
					</div>';
		}
		else{
			echo '<div class="alert alert-danger alert-dismissible mt-2">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>Item already Added to your cart</strong>
					</div>';
		}
	}
	
	if(isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item'){
		$stmt = $con->prepare("SELECT * FROM cart");
		$stmt->execute();
		$stmt->store_result();
		$rows = $stmt->num_rows;

		echo $rows;
	}

	
?>