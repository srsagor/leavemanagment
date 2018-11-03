<?php
include("Config.php");
   session_start();
   ?>
<!DOCTYPE html>
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
<li><a href="show_off_day.php"><h2> Show may Off day</h2></a></li>
<li><a href="chk_stuts.php"><h2> Show my info</h2></a></li>
<li><a href="logout.php"><h2> Log Out</h2></a></li>
</ul>
<p>Welcome <?php echo $_SESSION['myusername']; ?>!</p>
</body>
</html>
<?php
include("Config.php");
   session_start();
   $N=$_SESSION['myusername'];
   $sql="SELECT * FROM emply WHERE username='$N'";
   $result = $db->query($sql);
   while($row = mysqli_fetch_array($result))
{
echo "Name:" . $row['name'];
echo "<br>";
echo "Possition:" . $row['postion'] ;
echo "<br>";
echo "Off Day Remain:" . $row['offday'];
echo "<br>";
}
   
   ?>