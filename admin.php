<?php

include 'server.php';
session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];  
    $password = $_POST['password'];  
     
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
     
       
        $sql = "select * from adminlogin where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
         
        if($count == 1){
            $_SESSION['logged_in'] = 1;
            echo "<script>alert('Successfully Logged in!!')</script>";  
            header("Location: adminreg.php");
        }  
        else{  
            echo "<script>alert('Login failed. Invalid username or password')</script>";  
        }
  }

 
?>


<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

    <title>ADMINLogIn</title>
</head>
<body>
<div class="topnav" id="myTopnav" >
  <a href="index.php" class="active" style="color:white;background-color:chocolate;">Home</a>
  <a href="aboutUs.php" >About Us</a>
  <a href="registration.php">Participant Registration </a>
  <a href="moderators.php">Moderators </a>
  <a href="contact.php">Contact</a>
  <a href="admin.php" style="float: right; color:white;background-color:gray;">Admin</a> 
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    
  </a>
  </div>
<style type="text/css">

    
body{
    background-image:url("assets/pipes.jpg");
    background-repeat: repeat;
    background-position: center;
}
    #text{
 padding: 6px;
 height: 25px;
 border: solid thin #aaa;
 border-radius:5px;

}
#button{
 padding: 2px;
 width: 50px;
 color: brown;
 background-color:sandybrown ;
 border-style:groove;
}
#box{
 padding: 50px;
 width: 200px;
 margin: auto;
 background-color: peru;
}

</style>
<div id="box">
<form method="post">
    <div style="font-size:30px; margin:10px; color:white;"><b>LOGIN</b></div>
  <label for = "username"><b>Username</b>  </label>

<input id="text"  type="text" name="username"> <br><br>

<label for = "password"><b>Password</b>  </label>

<input id="text" type="password" name="password"><br><br>

<input id="button" type="submit" name="login" value="Login"><br><br>
</form>
</div>

</body>
</html>
