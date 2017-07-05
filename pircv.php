
<?php
include('connect.php');

	$temp = htmlspecialchars($_POST["temp"]);

 	$sql = "INSERT INTO water_temp (temp) VALUES ($temp)";
	if (mysqli_query($connect, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connect);
	} 

//select the latest water_temp
$result = mysqli_query($connect, "SELECT * FROM water_temp ORDER BY time DESC LIMIT 1;");

while ($row = mysqli_fetch_array($result)) {
    echo "<div class='infobox_data'>Temperature: ".$row['temp']."&deg;C</div>";
    echo "<div class='infobox_time'>Captured: ".date("g:i:s a F j, Y ", strtotime($row["time"]))."</div>";
}

mysqli_close($connect); ?>

