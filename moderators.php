<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: darkkhaki;
  margin: 8px;
}

.about-section {
  
  text-align: center;
  background-color:rgba(45, 153, 45, 0.542); ;
  color: white;
  font-size:70px;
  padding-top: 50px;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}



@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
<title>MODERATORS</title>
</head>
<body>
<div class="topnav" >
     <a href="index.php" style="background-color:rgba(45, 153, 45, 0.542);;">Home</a>
     <a href="aboutUs.php" >About Us</a>
     <a href="registration.php" >Participant Registration  </a>
     <a href="moderators.php">Moderators </a>
     <a href="contact.php" >Contact</a>
     <a href="admin.php" style="float: right; color:white;background-color:cadetblue;">Admin</a> 
     <a href="javascript:void(0);" class="icon" onclick="myFunction()">
     
    </a>
  </div>

<div class="about-section">
  <h3>MODERATORS ONSITE</h3>
 
</div>

<br>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="assets/jovan.jpg"  style="width:70%">
      <div class="container">
        <h2>CHARLES JOVANS</h2>
        <p class="title">DICUSSION MODERATOR</p>
        <p> Detailing Decision And Control</p>
        <p>In Several Application Developments</p>
        <p>CONTACT: 0756787567</p>
        <P>Email: charlesjovans@gmail.com<P>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/trisha.jpg"  style="width:70%">
      <div class="container">
        <h2>NAMUTEBI TRISHA</h2>
        <p class="title">LEAD DEVELOPER</p>
        <p>Developing Sustainable Systems </p>
        <p>For the future</p>
        <p>CONTACT: 0782355677</p>
        <p>Email: namutebitrisha@gmail.com<p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="assets/david.jpg"  style="width:100%">
      <div class="container">
        <h2>David Walkman</h2>
        
        <p class="title"> Programmer </p>
        <p>Developer refracts. Hacker does. Programmer solves</p>
        <p>CONTACT: +253743569033</p>
        <p>Email: davidwalkman@gmail.com<p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="assets/fred.jpg"  style="width:100%">
      <div class="container">
        <h2> Fred DUMBA</h2>
        <p class="title"> Full-Stack Developer</p>
        <p>From Databases to Graphic design and UI/UX management </p>
        <p>In order to do their job well.</p>
        <p>CONTACT: 0793435454</p>
        <p>Email:dddumba@gmail.com<p>
      </div>
    </div>
  </div>
  
</div>

</body>
</html>
