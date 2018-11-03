<?php
include("Config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
   $N=$_SESSION['myusername'];
   $sql="SELECT * FROM emply WHERE username='$N'";
   $result = $db->query($sql);
   while($row = mysqli_fetch_array($result))
{
$myusername=$row['username'];
$myname=$row['name'];
$myemail=$row['email'];
$mypos=$row['postion'];
}
$mynub = mysqli_real_escape_string($db,$_POST['nub']);
$mysdate = mysqli_real_escape_string($db,$_POST['sdate']);
$myedate = mysqli_real_escape_string($db,$_POST['edate']);
$mycause= mysqli_real_escape_string($db,$_POST['message']);

   $sql="SELECT * FROM aply WHERE username='$N'";
   $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
     
      $count2 = mysqli_num_rows($result);
	
      if($count2 >= 1) 
	  {
	  echo " Your One Request Under processing";
	  }
	  else
	  {

 $sql = "INSERT INTO aply (username,name,email,postion,sdate,edate,offdayr,message)VALUES ('$myusername', '$myname','$myemail','$mypos','$mysdate','$myedate','$mynub','$mycause')"; 
	 
	 if ($db->query($sql) === TRUE) {
    header("location:emplypage.php");
} else {
    
}
	  
  }
  }
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
<h2 align="center">Apply For Off Day</h2>
<form action = "" method = "post" align="center" >
                   <label>Total Day :</label><input type = "text" name = "nub" class = "box"/ required><br /><br />
                  <label>Start Date :</label><input type = "date" name = "sdate" class = "box"/ required><br /><br />
                  <label>End Date  :</label><input type = "date" name = "edate" class = "box"  required/><br/><br />
				  <label>Cause  :</label> <textarea name="message" rows="5" cols="50"></textarea> <br /><br />
				  <input type = "submit" value = " Submit "/><br />
				  
</form>
</body>
</html>