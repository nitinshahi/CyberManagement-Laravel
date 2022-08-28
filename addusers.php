<?php 
session_start();
ob_start();
include("includes/connection.php");
 $result = mysqli_query($conn,'select computername from tbl_computers ORDER BY id ASC ');
                       

if(isset($_POST["submit"])){
        $fname = $_POST["fname"];
        $address = $_POST["address"];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $c_name = $_POST['c_name'];
        $sql = "INSERT INTO tbl_users(username,useraddress,mobilenumber,email,computername) VALUES ('$fname','$address','$phone','$email','$c_name')";
        if ($conn->query($sql)== TRUE){
        echo "<script type= 'text/javascript'>alert('Record inserted in database success.');</script>";
        //header('location:listarticle.php');
        } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
        }
        echo "<script>
                        window.location = 'addusers.php';
              </script>";


}
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
		
		<h1>Add Users</h1>
		<br>
		<div id="content">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <fieldset>

                    <p>
                        <label for="Name">User Name: </label>
                        <input type="text" name="fname" id="fname">
                    </p>
                    <!-- <p>
                        <label for="Status">Status:</label>
                        <select name="status">
                            <option>Under construction</option>
                            <option>Rented</option>
                            <option>Unrented</option>
                        </select>
                    </p> -->
                    <p>
                        <label for="address">User Address:</label>
                        <input type="text" name="address" id="size">
                    </p>
                    <p>
                        <label for="email">User email:</label>
                        <input type="email" name="email" id="email">
                    </p>
                    <p>
                        <label for="phone">User phone: </label>
                        <input type="text" name="phone" id="phone">
                    </p>
                    <p>
                        
                        <label for="c_name">Computer name: </label>
                        <!--input type="text" name="c_name" id="c_name"-->
                        <select name="select_c_name" id="select_c_name">
                                <option> Select computer name:</option>
                                <?php while ($rows = mysqli_fetch_assoc($result)){
                                    ?>
                                <option value="<?php echo $rows['computername']?>"><?php echo $rows['computername']?></option>
                                <?php 
                                    }
                                ?>
                        </select>
                    </p>
                   
                    <p>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                    </p>
                    
                </fieldset>

            </form>
        </div>
			
	</div>

	</div>

</body>
</html>