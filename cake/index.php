
<!DOCTYPE hthml>
<html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Fredrick </title>
	<link rel="stylesheet"href="styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

	<style>

		img {
			height: 100%;
			width: 100%;


		}

</style>
</head>
<?php 
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);
?>
	<body>
	
		

	<div class="topnav" style="
	padding: 14px 20px;
	overflow: hidden;
	text-decoration: none;
	font-size: 25px;
	color: black;

	font-family: sans-serif;
	display: block;
	border-style: none;
	border-width: thin;
	border-color: black;">

		<label style="font-family: sans-serif; color: gold;font-size: 30px;">
			MODERN FAMILY CAKES
	</label>

		<a href= "log out.php">Logout</a>
		<a href="#about">About</a>
		
		
		<a href="#contact">Contact</a>
		
		<a href="#news">Order</a>
		<a href="cakes.php">Cakes</a>
		<a href="index.php">Home</a>

		<a href="#news"> Hello, <?php echo $user_data['user_name']; ?></a>
		
	<style type="text/css">
			body{ 
				background-color: aquamarine;
				font-size: 20px;
				padding-right: 0px;
				font-family: sans-serif;
				padding-top: 0px;

			}
	</style>		

</div>
 <div class="banner">
			<div class= "slide">
	  			<img src="table.jpg" id="slideImg">
			</div>
				

</div>


	



	

</body>
</html>
