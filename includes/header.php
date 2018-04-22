<?php
$companyName = "Franklin's Fine Dining";
include('includes/arrays.php'); 
?>

<!DOCTYPE html>
<html>

<head>
	<title><?php echo TITLE?></title>
	<link href="assets/styles.css" rel="stylesheet">
</head>

<body id="final-example">
	
	<div class="wrapper">
	
		<div id="banner">
			<a href="/" title="Return to Home">
				<img src="./assets/img/banner.png" alt="Franklin's Fine Dining">
			</a>	
		</div><!-- banner -->
		
		<div id="nav">
<ul>
	<?php include('includes/nav.php'); ?>
</ul>     

		</div><!-- nav -->
		
		<div class="content">