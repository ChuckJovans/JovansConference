<?php
include 'server.php';?>

<?php

//inserting participants information into our database

if(isset($_POST['registerbtn'])){
    echo "<br>";
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $topic = $_POST['topic'];
    $location = $_POST['location'];
    $phone = $_POST['phonenumber'];
   

    $sql = "insert into participants (Name,Email,TopictoPresent,Location,PhoneNumber) values
    ('$name','$email','$topic','$location','$phone')";
    // $sql = "select * from participants";

    if($conn->query($sql)){
        echo '
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Information inserted successfully
        </div>';
    }
    else{
       
        echo '<div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Error is here: ".$conn->error."
        </div>';
    }

}
//updating home data

if(isset($_POST['updatebtn'])){
    echo "<br>";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $topic = $_POST['topic'];
    $location = $_POST['location'];
    $phone = $_POST['phonenumber'];
   
    $sql = "UPDATE participants SET Name= '$name',TopictoPresent='$topic',Location='$location',PhoneNumber='$phone' WHERE Email='$email'";

    if($conn->query($sql)){
        echo '
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Participants Information updated successfully please click home tab to see new changes
        </div>';
    }
    else{
       
        echo '<div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Error is here: ".$conn->error."
        </div>';
    }

}


?>

<!DOCTYPE html>
<html>
<head>
<title>ADMIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:white;
}

.information{
    background-color: #04AA6D;
  color: white;
  height:50px;
  border: none;
  cursor: pointer;
  width: 200px;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text] {
  width: 300px;
  padding: 15px;
  
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus,  {
  background-color: #ddd;
  outline: none;
}

.reg {
  background-color: #04AA6D;
  color: white;
  height:50px;
  border: none;
  cursor: pointer;
  width: 100px;
  
}

</style>
</head>
<body>

<div class="topnav" >
     <a href="index.php" class="active">Home</a>
     <a href="aboutUs.php" >About Us</a>
     <a href="registration.php" >Participant Registration  </a>
     <a href="moderators.php">Moderators </a>
     <a href="contact.php" >Contact</a>
     <a href="admin.php" style="float: right; color:white;background-color:cornflowerblue;">Admin</a> 
     <a href="javascript:void(0);" class="icon" onclick="myFunction()">
     
    </a>
</div>

<form action="adminreg.php" method="POST">
  <div class="container">
      <table> 
          <tr>
              <td>
    <h2> Registering, Updating and Deleting Particpant information</h2>
  
    <label for="Name"><b>Name</b></label><br>
    <input type="text" placeholder="Enter Name" name="name"  required><br>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email"  required><br>

    <label for="Topict"><b> Topic to Present</b></label><br>
    <input type="text" placeholder="Enter the topic to present" name="topic"  required><br>

    <label for="Location"><b> Location</b></label><br>
    <input type="text" placeholder="Enter your Location" name="location" id="psw-repeat" required><br>

    <label for="phonenumber"><b>Phone Number</b></label><br>
    <input type="text" placeholder="Enter Your Phone Number" name="phonenumber"  required><br>
    
    <button type="submit" name="registerbtn" class="reg">Register</button>
    <button type="submit" name="updatebtn" class="reg">UPDATE</button>
    <!-- <button type="submit" name="deletebtn" class="reg">DELETE</button> -->
</td>
    <td>
<a href="contactAdmin.php" class="information"> Click To View Contact Information</a>
</td>
</tr>

    </table>
  </div>
 
  <?php
 
    $sql = "select * from participants where is_deleted like 0";

    $myquery = $conn->query($sql);

    echo "
    <div style='overflow-x:auto;'>
    <table border='1'>

    <tr>

    <th>Id</th>

    <th>Name</th>

    <th>Email</th>

    <th>Topic to Present</th>

    <th>Location</th>

    <th>Phone Number</th>

    <th>Action</th>

    </tr>";



    while($row = $myquery->fetch_assoc()){

        echo "<tr>";

        echo "<td>" . $row['id'] . "</td>";

        echo "<td>" . $row['Name'] . "</td>";

        echo "<td>" . $row['Email'] . "</td>";

        echo "<td>" . $row['TopictoPresent'] . "</td>";

        echo "<td>" . $row['Location'] . "</td>";

        echo "<td>" . $row['PhoneNumber'] . "</td>";
       
        if( $row['is_deleted'] == 0 ){
            echo "
            <td>
                <a name='deletebtn' href='delete.php?deletebtn=$row[id]' style='color: red;'>Delete</a>
            </td>";
        }
        else{
            echo "
            <td>
                <a name='deletebtn' href='delete.php?deletebtn=$row[id]' style='color: orange;'>Undo Delete</a>
            </td>
            ";
        }
       
       

        echo "</tr>";

        }

        echo "</table> </div>";

?>
 
  
</form>

</body>
</html>

