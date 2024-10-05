<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><center><form action="" method="post"><table width="80%" border="0" cellspacing="10">
  <tr>
    <td width="26%">Enter Complaint No.</td>
    <td width="49%"><input type="text" name="ticket" id="textfield" Placeholder="Enter Complaint Number" style="width:95%; padding:10px; font-size:14px;"/></td>
    <td width="25%" align="right"><input type="submit" name="status" id="button" value="View Status" style="background:#003; color:#FFF; padding:10px; font-size:16px;"/></td>
  </tr>
</table></form><br /><br />

<?php 
$ticket=""; 	
$who=""; 	
$dept=""; 	
$appli=""; 	
$doc=""; 	
if(isset($_POST['status'])){
$con= mysqli_connect("localhost", "root", "", "cms");
$sql="select * from comp where ticket=$_POST[ticket]";
$result= mysqli_query($con, $sql);



if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$ticket=$row['ticket']; 	
$who=$row['who']; 	
$dept=$row['dept']; 	
$appli=$row['appli']; 	
$doc=$row['doc']; 	
	
echo '<h2>Complaint Status</h2><hr />
<table width="90%" border="1" cellpadding="10" cellspacing="0">
  <tr>
    <td width="19%" valign="top">Complaint No.</td>
    <td width="81%">'.$ticket.' </td>
  </tr>

  <tr>
    <td valign="top">Consumer Email</td>
    <td>'.$who.'</td>
  </tr>
    <tr>
    <td valign="top">Department</td>
    <td>'. $dept.'</td>
  </tr>
  <tr>
    <td valign="top">Complaint Detail</td>
    <td>'.$appli.'</td>
  </tr>
  <tr>
    <td valign="top">Attached Document </td>
    <td><a href="'.$doc.'" target="_new">Click Here</a></td>
  </tr>
   <tr>
    <td valign="top"><b>Status</b> </td>
    <td><span style="color:RED;">'.$row['stat'].'</span></td>
  </tr>
</table>';
}
}}
?>

</center>
</body>
</html>