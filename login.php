<?php
if(isset($_POST['uname']))
{
$con= mysqli_connect("localhost", "root", "", "cms");
$sql="Select * from login where email='$_POST[uname]' and psw1='$_POST[psw]'";
$result= mysqli_query($con, $sql);
session_start();

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{ $_SESSION['a']=$row['email'];
		if($row['role']=="Admin")
		header('Location: admin.php');
		if($row['role']=="CUS") 
		header('Location: customer.php');	

		
	}
}
else
{ echo "<script>alert('Your User Name and Password');</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Window</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="ico.jpg" type="image/x-icon">  

<style>
* {
  box-sizing: border-box;
}

form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 10%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
body {
  font-family: Arial, Helvetica, sans-serif;
  margin:0px;
}

/* Style the header */
header {
  background-color: #666;

  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 20%;
  height: 600px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 80%;
  background-color: #f1f1f1;
  height: 600px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  width:170px;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>
<header>
 <img src="login.png" style=" width:100%; height:auto; resize:both"> 
</header>

<section>
  <nav>
  <button class="button button1" onClick="abc('home');">Home</button>
<button class="button button1" onClick="abc('signup');"> Sign Up</button>

  </nav>
  
  <article>
   
<h2>Login Form</h2>

<form action="" method="post">
  <div class="imgcontainer">
    <img src="log.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" >Login</button>
  
  </div>

</form>
  </article>
</section>

<footer>
  <p>Desgined By -</p>
</footer>

</body>
</html>

<script>
function abc(a)
{
	if(a=="login")
window.location.href = "admin.php";
else if(a=="home")
window.location.href = "index.html";
else
window.location.href = "signup.php";
}
</script>