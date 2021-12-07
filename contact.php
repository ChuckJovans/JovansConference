<?php
include 'server.php';?>

<?php

//inserting participants information into our database

if(isset($_POST['contactbtn'])){
    echo "<br>";
   
    $namee = $_POST['name'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];
   

    $sql = "insert into contacts (Name,Country,Subject) values
    ('$namee','$country','$subject')";
    // $sql = "select * from participants";

    if($conn->query($sql)){
        echo '
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Contact information inserted successfully
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;

 background-color: white;  
}
.back{
  background-image: url("assets/download.jpg");
  background-repeat: no-repeat;
  background-size: 1500px;
}

input[type=text], select, textarea {
  
  padding: 12px;
 
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  width:500px;
  resize: vertical;
  
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 20px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.Super{
  
 
}
.container {
  border-radius: 40px;
  padding: 50px;
  width: 700px; 
  
}
.info{
  padding-left: 200px;
  /* background-image: url("assets/ttt.jpg"); */
  background-position-x: center;
  background-repeat: no-repeat;
  background-position-y: center;
  color:black;
  font-size: 20px;
  
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  /* text-align: center; */
}

.hear{
  text-align: center;
  background-color: rgba(118, 150, 208, 0.481);
font-size: 20px;
}
</style>
<title>CONTACT FORM</title>
</head>
<body>

<div class="topnav" id="myTopnav" >
  <a href="index.php" class="active">Home</a>
  <a href="aboutUs.php" >About Us</a>
  <a href="registration.php">Participant Registration </a>
  <a href="moderators.php">Moderators </a>
  <a href="contact.php">Contact</a>
  <a href="admin.php" style="float: right; color:white;background-color:cornflowerblue;">Admin</a> 
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    
  </a>
  </div>
  <div class="back">
<div class="hear">
 <h3>We would love to hear  from you </h3> 
  whether you have a question about the conference, its date, the topics to be talked about or anything else <br>
  Our team is ready to answer all your questions
</div>
 
<div class="Super">
<div class="container" >

  <table>
    <tr>
      <td>

        <h3>Contact Form</h3>
        <form action="contact.php" method="POST">
        <div style="font-size:30px;  color:black;"> 
          <label for="name" >Name</label> <br>
          <input type="text"  name="name" placeholder="Enter Your Name">
      
      <br>
          <label for="country">Country</label><br>
          <input type="text" name="country" placeholder="Enter Your Country..">
         
          <br>
          <label for="subject">Subject</label><br>
          <textarea  name="subject" placeholder="Write Your Queries here You will be answered shortly by our moderaters" style="height:100px"></textarea>
          </div>
          <input type="submit" name="contactbtn" value="Submit">
        </form>
        
        </div>

      </td>

     
      <td class="info">
        
          <h2>Get in touch with us on:
          </b> 
       <b> EMAIL:<a>ugandachristianuni@gmail.com</a> <br>
       <b>Phone Number:</b> <a>0752540066</a> <br>
       <b> Twitter:</b> <a>@ucu</a> <br>
       <b>Facebook:</b> <a>@ucu</a> <br>
       <b>Instagram:</b> <a>@ucu</a>
        </h2>
      
      </td>

    </tr>
   
</table>


</div>
</div>
</body>
</html>
