<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body class="background" style="background-image: url('images/background.jpg');">

	<div class="loginstart">

		<form action="dashboard.php" method="POST">
			<center>
				<h1>Login Page</h1>
			<img src="images/admin.png" class="adminimg">
			</center>
			
			
			<label class="labelname">Username:</label></br>
			<input type = "text" name = "username" class="textbox" placeholder="Enter your username"></br></br>
			<label class="labelname">Password:</label></br>
			<input type="password" name="password" class="textbox" placeholder="Enter your password"></br></br>

			<input type="submit" name="login" class="button" value="Login"></br>
		
		</form>	

	</div>

</body>
</html>


<? php
session_start();
include("include/connection.php");

	if(isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "select * from tbl_admin' WHERE username='$username' AND password='$password' ";

		$query_run = mysqli_query($conn,$query);
		

		if(mysqli_fetch_array($query_run)>0){

			header('location: dashboard.php');
		}
		
	}else{
			echo '<script>alert("login failed")</script>';
		}

?>
