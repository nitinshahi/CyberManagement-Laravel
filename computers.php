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
                <h2> List of computers</h2>
            </center>

            <?php

            $sql = "SELECT id,computername,computerlocation FROM tbl_computers";
            $result = $conn->query($sql);

            while ($rows = $result->fetch_assoc()) {

            ?>

            <div class="">
                
                    <table cellspacing="0px" cellpadding="10px" style="background-color:#FCDDD1" ;">
                        <tr>
                            <td> <b>Name :</b></td>
                            <td><?php echo $rows['computername']; ?></td>
                        </tr>
                        <tr>
                            <td> <b>computer location :</b> </td>
                            <td><?php echo $rows['computerlocation']; ?></td>
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