<?php
include 'server.php';?>

<?php

//inserting participants information into our database

if(isset($_POST['regg'])){
    echo "<br>";
   
    $name = $_POST['nname'];
    $email = $_POST['eemail'];
    $topic = $_POST['ttopic'];
    $location = $_POST['llocation'];
    $phone = $_POST['pphonenumber'];
   

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
?>

<!DOCTYPE html>
<html>
<head>
<title>PARTICIPANT REGISTRATION FORM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:white;
}



/* Add padding to containers */
.container {
  margin-left:200px;
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
     <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()"> -->
     
    </a>
</div>

<form action="registration.php" method="POST">
  <div class="container">
    <table>
    <tr>
      <td>
    <h2>Register</h2>
    <p> Fill in the form to register for the online Conference</p>
  
    <label for="Name"><b>Name</b></label><br>
    <input type="text" placeholder="Enter Name" name="nname"  required><br>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="eemail"  required><br>

    <label for="Topict"><b> Topic to Present</b></label><br>
    <input type="text" placeholder="Enter the topic to present" name="ttopic"  required><br>

    <label for="Location"><b> Location</b></label><br>
    <input type="text" placeholder="Enter your Location" name="llocation" id="psw-repeat" required><br>

    <label for="phonenumber"><b>Phone Number</b></label><br>
    <input type="text" placeholder="Enter Your Phone Number" name="pphonenumber"  required><br>
    <button type="submit" class="reg" name="regg" >Register</button>
    </td>
    <td>
      <img src="assets/coffee.jpg" style="width:100%; display:block;">
    </td>
    </tr>
    </table>
  </div>
  
  
</form>

</body>
</html>

