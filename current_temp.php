<!DOCTYPE html>
<html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>

	$.get( '/php1.php', function(latest_temp){
		$('#current_temp').html( latest_temp );
	});
		
	setInterval(function(){
		$.get( '/php1.php', function(latest_temp){
			$('#current_temp').html( latest_temp );
		});
	},5000); // 5000ms == 5 seconds
	
	$(function(){
		$("#layout").load("index.html");
	});
</script>

<?php
$pageName='Current Temperature';
include('header.php');
?>
	
<p>Temperature obtained using ds18b20 sensor and raspberry pi.</p>
<p>Updated every 5 seconds <span id='current_temp'></span></p>

<?php
include ('footer.php');
?>
</html>

