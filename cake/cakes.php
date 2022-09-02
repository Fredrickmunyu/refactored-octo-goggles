
 <!DOCTYPE hthml>
<html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> cakes </title>
	<link rel="stylesheet"href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

</head>
<?php 
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);
?>
<body>
	<div class="menu">
		<div class="heading">
			<h1>MODERN FAMILY CAKES</h1>
			<h3>&mdash; MENU &mdash;</h3>
			<button style="background-color: sandybrown; font-weight: 600;"><a style="font-size: 25px; color: black;" href="index.php">Home</a></button>


		</div>

		<div class="cake-items">
			<img src="wed.jpg">
			<div class="details">

				<div class="details-sub">
					<h5> Wedding cakes</h5>
					<h5 class="price"> KES 35000 </h5>
				</div>
					<p>
						Starting a new life with the best cakes around
					</p>
					<button>Add to cart</button>
			</div>
		</div>

		<div class="cake-items">
			<img src="vanilla.jpg">
			<div class="details">

				<div class="details-sub">
					<h5> Vanilla cake</h5>
					<h5 class="price"> KES 2000 </h5>
				</div>
					<p>
						The best vanilla cake available in Kenya
					</p>
					<button>Add to cart</button>
			</div>
		</div>
		<div class="cake-items">
			<img src="straw.jpg">
			<div class="details">

				<div class="details-sub">
					<h5> Strawberry cakes</h5>
					<h5 class="price"> KES 2000 </h5>
				</div>
					<p>
						Laughter with a strawberry cake in your mouth
					</p>
					<button>Add to cart</button>
					
		
				
			</div>

		</div>
		<div class="cake-items">
			<img src="choc.jpg">
			<div class="details">

				<div class="details-sub">
					<h5> Chocolate cakes</h5>
					<h5 class="price"> KES 3000 </h5>
				</div>
					<p>
						Get yourself a cake today
					</p>
					<button>Add to cart</button>
					
		
				
			</div>

		</div>
		<div class="cake-items">
			<img src="vel.jpg">
			<div class="details">

				<div class="details-sub">
					<h5> Velvet cake</h5>
					<h5 class="price"> KES 1500 </h5>
				</div>
					<p>
					All kinds of velvet cakes are available
					</p>
					<button>Add to cart</button>
					
		
				
			</div>

		</div>
		<div class="cake-items">
			<img src="birth.jpg">
			<div class="details">

				<div class="details-sub">
					<h5> Birthday cakes</h5>
					<h5 class="price"> KES 2500 </h5>
				</div>
					<p>
						Happy to turn your year to the next level
					</p>
					<button>Add to cart</button>
					
		
				
			</div>

		</div>
		<div class="cake-items">
			<img src="grad.jpg">
			<div class="details">

				<div class="details-sub">
					<h5> Graduation cakes</h5>
					<h5 class="price"> KES 2500 </h5>
				</div>
					<p>
						Happy graduation!!
					</p>
					<button>Add to cart</button>
					
		
				
			</div>

		</div>
		<div class="cake-items">
			<img src="baby.jpg">
			<div class="details">

				<div class="details-sub">
					<h5> Baby Shower cakes</h5>
					<h5 class="price"> KES 2500 </h5>
				</div>
					<p>
						Happy to start a life of another with an amazing cake
					</p>
					<button>Add to cart</button>
					
		
				
			</div>

		</div>

	</div>

	
</body>

</html>
