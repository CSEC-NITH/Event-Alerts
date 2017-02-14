<?php
  session_start();
  if(isset($_SESSION["user"])){
    header('location: studentDashboard.php');
  }
?>
<html>
     <head>
     	<title>Event-Alerts</title>
     		<link rel="stylesheet" type="text/css" href="../css/firstcss.css">
     		<link rel="stylesheet" type="text/css" href="../css/design1.css">
        <link rel="stylesheet" type="text/css" href="../css/loginform.css">
     </head>
<body style="background-color:#dcdcdc">
	
      <div class="header">
      	<ul class="list">
      		<li class="active">Event-Alerts</li>
        <li class="notactive" onclick="document.getElementById('id01').style.display='block'"><a>LogIn </a></li>
		 <li class="notactive" onclick="document.getElementById('id02').style.display='block'"><a>SignUp</a></li>
		 
		 
	    </ul>
	  </div>
	  <div class="second">
	  	<div class="slideshow-container">

<div class="mySlides fade">
  <img src="../images/a.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <img src="../images/b.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="../images/c.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="../images/d.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="../images/f.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="../images/g.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="../images/h.jpg" style="width:100%">
</div>


</div>
</div>
<div class="last">
  <div class="lastone"></div>
  <div class="lastone"></div>
</div>
  <div id="id01" class="modal">
  
  <form class="modal-content animate" action="./login.php" method="POST">
    

    <div class="container">
      <label style="font-family:Arial;">Username</label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label style="font-family:Arial;">Password</label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button  style="font-family:Arial;color:white;" type="submit">Login</button>
      
    </div>

    <div class="container" style="background-color:#33404d;">
      <button style="font-family:Arial;" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>
  <div id="id02" class="modal1">
  
  <form class="modal-content animate" action="./signup.php" method="POST">
    

    <div class="container">
      <label style="font-family:Arial;">Name</label>
      <input type="text" placeholder="Enter Name" name="name" required>
      <label style="font-family:Arial;">Roll No.</label>
      <input type="text" placeholder="Enter Roll No." name="rollno">
      <label style="font-family:Arial;">Username</label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      <label style="font-family:Arial;">Email</label>
      <input type="email" placeholder="Enter Email" name="email" required>
      
 <label style="font-family:Arial;">Phone No.</label>
      <input type="number" placeholder="Enter Phone No" name="phone" required>

      <label style="font-family:Arial;">Password</label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button  style="font-family:Arial;color:white;" type="submit">SignUp</button>
      
    </div>

    <div class="container" style="background-color:#33404d;">
      <button style="font-family:Arial;" type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    else if(event.target == modal1) {
        modal1.style.display = "none";
    }
   
}
</script>
<script src = "../js/try.js">
</script>

	 


    
</body>

</html>