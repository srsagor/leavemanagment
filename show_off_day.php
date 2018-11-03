<?php
include("Config.php");
   session_start();
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="style.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#0099FF">
<ul>
<li><a href="emplypage.php"><h2> Show my info</h2></a></li>
<li><a href="apply.php"><h2> Apply</h2></a></li>
<li><a href="show_off_day.php"><h2> Show my Off day</h2></a></li>
<li><a href="chk_stuts.php"><h2> Show my info</h2></a></li>
<li><a href="logout.php"><h2> Log Out</h2></a></li>
</ul>
</body>
</html>
<?php
$N=$_SESSION['myusername'];
   $sql="SELECT * FROM final WHERE username='$N'";
   $result = $db->query($sql);
   echo "<table border='1'>
<tr>
<th>User Name</th>
<th>Name</th>
<th>Posstion</th>
<th>Start Date</th>
<th>End Date</th>
</tr>";
   while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['postion'] . "</td>";
echo "<td>" . $row['sdate'] . "</td>";
echo "<td>" . $row['edate'] . "</td>";
echo "</tr>";
}
echo "</table>";