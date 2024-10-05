<?php
session_start();
date_default_timezone_set('Asia/Calcutta'); 
$dd=date("Y-m-d h:i:s A");
if(isset($_POST['update']))
{
$con= mysqli_connect("localhost","root","","cms");
$sql="update login set psw1='$_POST[psw1]',fatname='$_POST[fatname]',address='$_POST[address]',mob=$_POST[mob] where email = '$_POST[email]'";
mysqli_query($con, $sql);
mysqli_close($con);	
	
}

if(isset($_GET['page']))
{ 
	if($_GET['page']=="prof.php")
	{
$con= mysqli_connect("localhost", "root", "", "cms");
$sql="select * from login where email='$_SESSION[a]'";
$result= mysqli_query($con, $sql);
$fullname=""; 	
$psw1=""; 	
$role=""; 	
$mob=""; 	
$fatname=""; 	
$email=""; 	
$address="";

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$fullname=$row['fullname']; 	
$psw1=$row['psw1'];
$role=$row['role'];	
$mob=$row['mob'];	
$fatname=$row['fatname'];	
$email=$row['email'];
$address=$row['address'];

		
	}
}
mysqli_close($con);
	}
}
if(isset($_POST['comp']))
{
	      $target_path = "/";  
   echo $target_path = basename($_FILES['doc']['name']);   
      
    if(move_uploaded_file($_FILES['doc']['tmp_name'], $target_path)) {  
        
    } 
	$con= mysqli_connect("localhost","root","","cms");
$sql="insert into comp (who,dept, appli, doc,date, stat) values ('$_SESSION[a]','$_POST[dept]','$_POST[appli]','$target_path','$dd','Pending')";
mysqli_query($con, $sql);
mysqli_close($con);	
    
	}



	?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Customer Profile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
  height: 870px; /* only for demonstration, should be removed */
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
  height: 870px; /* only for demonstration, should be removed */
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
 <img src="cus.png" style=" width:100%; height:auto; resize:both"> 
</header>

<section>
  <nav>
<a href="?page=prof.php"><button class="button button1">Profile Update</button></a>
<a href="?page=comp.html"><button class="button button1" name="comp">Create Complaints</button></a>
<a href="?page=stats.php"><button class="button button1">View Status</button></a>
<a href="?page=history.php"><button class="button button1">Complaint's History</button></a>
<button class="button button1" onClick="abc('logout');">Logout</button>


  </nav>
  
  <article>
<div class="w3-container">
    <div class="w3-panel w3-card w3-blue" style="width:29%; float:left; margin:2%; text-align:center;"><p>Total<br>Complaint<br><br> <span class="w3-badge w3-large  w3-red">9</span></p></div>
    <div class="w3-panel w3-card w3-blue" style="width:29%; float:left; margin:2%; text-align:center;"><p>Pending<br>Complaints<br><br> <span class="w3-badge w3-large  w3-red">9</span></p></div>
      <div class="w3-panel w3-card w3-blue" style="width:29%; float:left; margin:2%; text-align:center;"><p>Resolved<br>Complaints<br><br> <span class="w3-badge w3-large  w3-red">9</span></p></div>
</div>   
<div>
<?php include $_GET['page']; ?>
</div>
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
	if(a=="logout")
window.location.href = "index.html";

}
</script>
