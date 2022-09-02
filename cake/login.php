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
			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";

			$result = mysqli_query($con,$query);

			if($result)

			{
					if($result && mysqli_num_rows($result) > 0)

				{
					$user_data = mysqli_fetch_assoc($result);
					
					if ($user_data['password'] === $password)

					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}	

				}
	
			}

				echo "Wrong username name or password";

		}	else
			
			{
		
				echo "Wrong username and password";

			}

	}
?>

<!DOCTYPE hthml>
<html>
<head>
	<title> Login </title>
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
	<div style = "font-size: 20px;margin: 10px;color: blue;">Login</div>
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
		<label for ="password" > if you dont have an account?</label>

<div style = "font-size: 15px;margin: 10px;color: blue;">
	<a href ="sign up.php"> Click to Signup</a><br><br>
</div>

	</form>

</div>


</body>
</html>

