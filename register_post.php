<html>
<?php
$pageName='Register';
include('header.php');
include('connect.php');

$name = $_POST["name"];
$pass = $_POST["pass"];
$passcodeen = hash('sha256', $pass);

$sql = "INSERT INTO login (username, password) VALUES ('$name', '$passcodeen')";

if (mysqli_query($connect, $sql)) {
		echo "Thank you $name, your details have been added to the database.";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connect);
	} 

include('footer.php');
?>
</html>