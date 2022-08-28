<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

	<div class="wrapper">
		
	<?php include('includes/sidebar.php'); ?>
		
		<h1>List of Computers</h1>
		<br>
		<div id="content">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <fieldset>

                    <p>
                        <label for="Name">Name: </label>
                        <input type="text" name="fname" id="fname">
                    </p>
                    <p>
                        <label for="Status">Status:</label>
                        <select name="status">
                            <option>Under construction</option>
                            <option>Rented</option>
                            <option>Unrented</option>
                        </select>
                    </p>
                    <p>
                        <label for="Size">Size (in sq.ft):</label>
                        <input type="text" name="size" id="size">
                    </p>
                    <p>
                        <label for="O_email">Owner email:</label>
                        <input type="email" name="email" id="email">
                    </p>
                    <p>
                        <label for="O_phone">Owner phone: </label>
                        <input type="text" name="phone" id="phone">
                    </p>
                    <p>
                        <label for="B_room">Bathrooms: </label>
                        <input type="number" name="broom" id="broom">
                    </p>
                    <p>
                        <label for="Room">Rooms: </label>
                        <input type="number" name="room" id="room">
                    </p>
                    <p>
                        <label for="Location">location:</label>
                        <input type="text" name="location" id="location">
                    </p>
                    <p>
                        <label for="Price">Price:</label>
                        <input type="text" name="price" id="price">
                    </p>
                    <p>
                        <label for="Photo">Upload photo</label>
                        <input type="file" name="photo">
                    </p>
                    <p>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                    </p>
                    <p>
                        <input type="checkbox" name="home" value="0">Display on home page

                    </p>

                </fieldset>

            </form>
        </div>
			
	</div>

	</div>

</body>
</html>