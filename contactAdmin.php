<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

        <title>AdminContact</title>
    </head>


    <body>
    <div class="topnav" >
     <a href="index.php" style="background-color:rgba(45, 153, 45, 0.542);;">Home</a>
     <a href="aboutUs.php" >About Us</a>
     <a href="registration.php" >Participant Registration  </a>
     <a href="moderators.php">Moderators </a>
     <a href="contact.php" >Contact</a>
     <a href="admin.php" style="float: right; color:white;background-color:cornflowerblue;">Admin</a> 
     <a href="javascript:void(0);" class="icon" onclick="myFunction()">
     
    </a>
  </div>
  <h3> Contact information</h3>
    </body>
      </html>

<?php
include 'server.php';?>

<?php
 
    $sql = "select * from contacts where is_deleted like 0";

    $myquery = $conn->query($sql);

    echo "
    <div style='overflow-x:auto;'>
    <table border='1'>

    <tr>

    <th>Id</th>

    <th>Name</th>

    <th>Country</th>

    <th>Subject</th>

    <th>Action</th>

    </tr>";



    while($row = $myquery->fetch_assoc()){

        echo "<tr>";

        echo "<td>" . $row['Id'] . "</td>";

        echo "<td>" . $row['Name'] . "</td>";

        echo "<td>" . $row['Country'] . "</td>";

        echo "<td>" . $row['Subject'] . "</td>";

       
        if( $row['is_deleted'] == 0 ){
            echo "
            <td>
                <a name='deleteId' href='delete.php?deleteId=$row[Id]' style='color: red;'>Delete</a>
            </td>";
        }
        else{
            echo "
            <td>
                <a name='deleteId' href='delete.php?deleteId=$row[Id]' style='color: orange;'>Undo Delete</a>
            </td>
            ";
        }
       
       

        echo "</tr>";

        }

        echo "</table> </div>";

?>
