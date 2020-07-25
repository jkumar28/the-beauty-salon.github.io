<?php
//dbconnection.php

$con = mysqli_connect("localhost","root","","the_beauty_salon");
	if (!$con) {
    	die("Connection failed: " . mysqli_connect_error());
	}

?>