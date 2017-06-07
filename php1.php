
<?php
	include('connect.php');

//select the latest water_temp
$result = mysqli_query($connect, "SELECT * FROM water_temp ORDER BY time DESC LIMIT 1;");

while ($row = mysqli_fetch_array($result)) {
    echo "<div class='infobox_data'>Temperature: ".$row['temp']."&deg;C</div>";
    
}

mysqli_close($connect); ?>

