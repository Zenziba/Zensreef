<!DOCTYPE html>
<html>
<?php
$pageName = 'Temp Graph';
include('header.php');
?>

	<div id="chart-container">
		<canvas id="mycanvas"></canvas>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.js"
		integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
		crossorigin="anonymous">
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js"></script>
	<script src="app.js"></script>

<?php
include('footer.php');
?>
</html>