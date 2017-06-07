<?php 
	header('Content-Type: application/json');
	
	include('connect.php');

	$time = "CONVERT_TZ(time,'-04:00','+10:00')";

	//Query to get data from 1st day of 6th month
	//$sql = "SELECT $time, temp FROM water_temp WHERE MONTH(time) = 6 AND DAY(time) = 1";
	
	//Get data from current date
	$sql = "SELECT CONVERT_TZ(time,'-04:00','+10:00'), temp FROM water_temp WHERE DATE(time) = CURDATE()";
	
	$result = mysqli_query($connect,$sql);
	//$result = mysqli_query($connect,"SELECT time, temp FROM water_temp WHERE YEAR(2017)");
	
	//loop through the returned data
/* 	$data = array();
	foreach ($result as $row) {
		$data[] = $row;
	} */
	
	$data = array();
	while ($row = mysqli_fetch_assoc($result)) {
    array_push($data, $row);
}

	
	$result->close();
	$connect->close();

	//now print the data
	print json_encode($data);
?>