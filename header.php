<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">
	   
<html>
	<head>
	
	<?php //to try and stop browser from caching and showing old values
		header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
		header("Pragma: no-cache"); // HTTP/1.0
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	?>

		<link rel="stylesheet" type="text/css" href="splash.css">
		<title>
		<?php
			echo $pageName;
		?>
		</title>
		<div class="header"><h1><?php echo $pageName; ?></h1></div>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-100465387-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</head>

	<body>
		<div class="row">
			<div class="col-2 menu"><!--Side Menu Nav Panel -->
			<div class="row"><!--Menu Button -->
				<form method="get" action="index.php">
				<button class="button button1">Home</button>
				</form>
			</div>
			<div class="row"><!--Menu Button -->
				<form method="get" action="current_temp.php">
				<button class="button button1">CurrentTemp</button>
				</form>
			</div>
			<div class="row"><!--Menu Button -->
				<form method="get" action="temp_graph.php">
				<button class="button button1">Temp Graph</button>
				</form>
			</div>
			<div class="row"><!--Menu Button -->
				<form method="get" action="index.php">
				<button class="button button1">Green</button>
				</form>
			</div>
		</div>

		<div class="col-10"><!--Content starts here-->
	</body>
</html>