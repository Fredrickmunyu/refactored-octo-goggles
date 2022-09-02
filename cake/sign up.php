<?php
session_start();

	include("connection.php");
	include("function.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")

	{
			//something was posted
			$user_name = $_POST['user_name'];
			$password= $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//save to database

			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			$result =mysqli_query($con,$query);

			header("Location: login.php");
			die;


		}	else
			
			{
		
				echo "Please enter the correct information";

			}

	}
?>

<!DOCTYPE hthml>
<html>
<head>
	<title> Sign up</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			font-family: 'Jost', sans-serif;
			background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
		}
		
		#text{
			height: 25px;
			border-radius: 5px;
			padding: 10px;
			border: solid thin #aaa;
		}


		#button{
			padding: 10px;
			width: 100px;
			color: white;
			background-color: blue;
			border: none;
		}

		#box {
		background-color: #0f0c29;
		margin: auto;
		width: 300px;
		padding: 100px;

		}
	</style>
	
<div id="box">
	<div style = "font-size: 20px;margin: 10px;color: blue;text-align: Center;">Sign up</div>
		<form method="post">
			<div style = "font-size: 16px;margin: 10px;color: blue;">
				<label for ="user_name" > Username </label>
			<input id= "text" type="text" name="user_name"><br><br>

		</div>
<div style = "font-size: 17px;margin: 10px;color: blue;">
	<label for ="password" > Password </label>
		<input id="text" type="password" name="password"><br><br>
</div>

	<div style = "font-size: 15px;margin: 10px;color: blue;">

	<input id="button" type="Submit" value="Submit"><br><br>
</div>

<div>
	<div style = "font-size: 15px;margin: 10px;color: purple;">
		<label for ="password" > if you have an account?</label>

<div style = "font-size: 15px;margin: 10px;color: blue;">
	<a href ="sign up.php"> Login</a><br><br>
</div>

	</form>

</div>


</body>
</html>

