<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
session_start();
echo $_SESSION['a'];
echo "hekk";
if(isset($_GET['page']))
{ 
	if($_GET['page']=="prof.php")
	{
$con= mysqli_connect("localhost", "root", "", "cms");
$sql="Select * from login where email='$_SESSION[a]'";
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
	}
}
	?>
</body>
</html>