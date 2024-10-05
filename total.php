<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>

<body>  
<table id="customers">
  <tr>
    <th>Complaint Number</th>
     <th>Complaint Detail</th>
    <th>Complaint Date</th>
    <th>Status</th>
       <th>Remark</th>
  </tr>
  <?php
  $con= mysqli_connect("localhost", "root", "", "cms");
$sql="select * from comp";
$result= mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
  echo '<tr>
    <td>'.$row['ticket'].'</td>
	 <td>'.$row['appli'].'</td>
    <td>'.$row['date'].'</td>
   <td>'.$row['stat'].'</td>
      <td>'.$row['remark'].'</td>
  </tr>';
	}
}
?>  
</table>

</body>
</html>