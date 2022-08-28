<?php
include("includes/connection.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

	<div class="wrapper">
		
	<?php include('includes/sidebar.php'); ?>

	<div class="dashboard-main">
		
		<center>
			<h2>Home</h2>
		
		
		<ul>
			<p>
				<li id="homecomputers">	
					<a href="computers.php">Total number of computers:</a>
					
					<?php $query1=mysqli_query($conn,"Select * from  tbl_computers");
					$totalcomp=mysqli_num_rows($query1);
					?>
                        <h4 class="mb-0">
                            <span class="count"><?php echo $totalcomp;?></span>
                        </h4>
                        <!-- <p class="text-light">Total Computers</p> -->
				</li>
			</p>
			<p id="homeusersp">
				<li id="homeusers">	
					<a href="users.php">Total number of users:</a>
					<?php $query=mysqli_query($conn,"Select * from  tbl_users");
						$usercounts=mysqli_num_rows($query);
						?>
                        <h4 class="mb-0">
                            <span class="count"><?php echo $usercounts;?></span>
                        </h4>
				</li>
			</p>
			
		</ul>
		</center>
			
	</div>

	</div>

</body>
</html>