<?php
include("includes/connection.php");

?>
<html>

<head>
    <link rel="stylesheet" href="css/login.css">
    <title>Display</title>
</head>

<body>
    <div id="wrapper">
        <?php
        include("includes/sidebar.php");
        ?>
        <div id="content">
            <center>
                <h2> List of Users</h2>
            </center>

            <?php

            $sql = "SELECT id,username,useraddress,mobilenumber,email,computername,intime,outtime FROM tbl_users";
            $result = $conn->query($sql);

            while ($rows = $result->fetch_assoc()) {

            ?>

            <div class="">
                
                    <table cellspacing="0px" cellpadding="10px" style="background-color:#FCDDD1" ;">
                        <tr>
                            <td> <b> User's Name :</b></td>
                            <td><?php echo $rows['username']; ?></td>
                        </tr>
                        <tr>
                            <td> <b>Users address :</b> </td>
                            <td><?php echo $rows['useraddress']; ?></td>
                        </tr>
                        <tr>
                            <td> <b>Users mobile :</b> </td>
                            <td><?php echo $rows['mobilenumber']; ?></td>
                        </tr>
                       <tr>
                            <td> <b>Email :</b> </td>
                            <td><?php echo $rows['email']; ?></td>
                        </tr>
                        
                        <tr>
                            <td> <b>computer name :</b> </td>
                            <td><?php echo $rows['computername']; ?></td>
                        </tr>
                        <tr>
                            <td> <b>login time  :</b> </td>
                            <td><?php echo $rows['intime']; ?></td>
                        </tr>

                    </table>
                    <br>
                    <a href="detail.php?id=<?php echo $rows['id']; ?>"><button id="view">View detail</button></a>
                </div>

            </div>



            <?php
            }
            ?>
        </div>
        
    </div>
    
</body>

</html>