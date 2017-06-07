<?php 
	header('Content-Type: application/json');
	
	include('connect.php');

	//$time = "CONVERT_TZ(time,'-04:00','+10:00')";

	//Query to get data from 1st day of 6th month
	$sql = "SELECT time, temp FROM water_temp WHERE MONTH(time) = 6 AND DAY(time) = 1";
	
	//Get data from current date - This works but breaks the graph because it expects 'time' instead of 'CONVERT_TZ' from json data
	//$sql = "SELECT CONVERT_TZ(time,'-04:00','+10:00'), temp FROM water_temp WHERE DATE(time) = CURDATE()";
	//$sql = "SELECT time, temp FROM water_temp WHERE DATE(time) = CURDATE()";
	
	$result = mysqli_query($connect,$sql);

	$data = array();
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($data, $row);
	}

	$result->close();
	$connect->close();

	print json_encode($data);
?>