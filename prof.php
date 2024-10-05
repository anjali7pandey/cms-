<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><center><form action="" method="post" >
<table width="90%" border="0" cellspacing="10">
  <tr >
    <td valign="top" style="width:16%">Customer Name </td>
    <td><input name="fullname" type="text" disabled="disabled" id="textfield" style="width:95%; font-size:13px; padding:8px;" readonly="readonly" value="<?php echo $fullname ?>"/></td>
  </tr>
  <tr>
    <td valign="top">Father Name</td>
    <td><input type="text" name="fatname" id="textfield2" style="width:95%; font-size:13px; padding:8px;" value="<?php echo $fatname ?>"/></td>
  </tr>
  <tr>
    <td valign="top">Email </td>
    <td><input name="email" type="text"  id="textfield3" style="width:95%; font-size:13px; padding:8px;" readonly="readonly" value="<?php echo $email ?>" /></td>
  </tr>
  <tr>
    <td valign="top">Mobile Number</td>
    <td><input type="text" name="mob" id="textfield4" style="width:95%; font-size:13px; padding:8px;" value="<?php echo $mob ?>" /></td>
  </tr>
  <tr>
    <td valign="top">Address</td>
    <td><textarea name="address" id="textarea" cols="45" rows="5"  style="width:95%; font-size:13px; padding:8px;" value=""><?php echo $address ?></textarea></td>
  </tr>
  <tr>
    <td valign="top">Password</td>
    <td><input type="text" name="psw1" id="textfield5" style="width:95%; font-size:13px; padding:8px;" value="<?php echo $psw1 ?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right">
   <input type="submit" name="update" id="button" value="Update Profile" style="padding:10px; margin-right:25px;" />&nbsp;</td>
  </tr>
</table></form></center>
</body>
</html>
