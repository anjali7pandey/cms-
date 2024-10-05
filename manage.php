<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<title>Untitled Document</title>
</head>

<body><center><div class="w3-panel w3-blue">
  <h3>Search Customer Detail!</h3><p>
<form action="" method="post" style="border:none !important;"><table width="80%" border="0" cellspacing="10" >
  <tr>
    <td width="26%">Enter Email</td>
    <td width="49%"><input type="text" name="email" id="textfield" Placeholder="Enter Complaint Number" style="width:95%; padding:10px; font-size:14px;"/></td>
    <td width="25%" align="right"><input type="submit" name="Search" id="button" value="View Status" style="background:#003; color:#FFF; padding:10px; font-size:16px;"/></td>
  </tr>
</table></form></p></div>

<?php
if(isset($_POST['Search'])){
$con= mysqli_connect("localhost", "root", "", "cms");
$sql="select * from login where email='$_POST[email]'";
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

echo '
<form action="" method="post" >
<table width="90%" border="0" cellspacing="10">
  <tr >
    <td valign="top" style="width:16%">Customer Name </td>
    <td><input name="fullname" type="text" disabled="disabled" id="textfield" style="width:95%; font-size:13px; padding:8px;" readonly="readonly" value="'.$fullname .'"/></td>
  </tr>
  <tr>
    <td valign="top">Father Name</td>
    <td><input type="text" name="fatname" id="textfield2" style="width:95%; font-size:13px; padding:8px;" value="'. $fatname.'"/></td>
  </tr>
  <tr>
    <td valign="top">Email </td>
    <td><input name="email" type="text"  id="textfield3" style="width:95%; font-size:13px; padding:8px;" readonly="readonly" value="'.$email.'" /></td>
  </tr>
  <tr>
    <td valign="top">Mobile Number</td>
    <td><input type="text" name="mob" id="textfield4" style="width:95%; font-size:13px; padding:8px;" value="'.$mob.'" /></td>
  </tr>
  <tr>
    <td valign="top">Address</td>
    <td><textarea name="address" id="textarea" cols="45" rows="5"  style="width:95%; font-size:13px; padding:8px;" value="">'. $address.'</textarea></td>
  </tr>
  <tr>
    <td valign="top">Password</td>
    <td><input type="text" name="psw1" id="textfield5" style="width:95%; font-size:13px; padding:8px;" value="'.$psw1.'"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right">
   <input type="submit" name="update" id="button" value="Update Profile" style="padding:10px; margin-right:25px;" />&nbsp;</td>
  </tr>
</table></form>
';
}
?>

</center>
</body>
</html>
