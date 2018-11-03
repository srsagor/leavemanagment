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

<body bgcolor="#0066FF">
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
include("Config.php");
   session_start();
   $N=$_SESSION['myusername'];
   $sql="SELECT * FROM aply WHERE username='$N'";
   $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
     
      $count2 = mysqli_num_rows($result);
	
      if($count2 >= 1) 
	  {
	  echo "Under processing";
	  }
	  else
	  {
	  $sql="SELECT * FROM accept WHERE username='$N'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
     
      $count1 = mysqli_num_rows($result);
	
      if($count1 >= 1) 
	  {
	  echo "Accept Your reqest";
	  $sql="SELECT * FROM accept WHERE username='$N'";
   $result = $db->query($sql);
   while($row = mysqli_fetch_array($result))
{
$myusername=$row['username'];
$myname=$row['name'];
$mypos=$row['postion'];
$mysdate=$row['sdate'];
$myedate=$row['edate'];
}
$sql = "INSERT INTO final (username,name,postion,sdate,edate)VALUES ('$myusername', '$myname','$mypos','$mysdate','$myedate')"; 
if ($db->query($sql) === TRUE) 
    {

 $sql = "DELETE FROM accept WHERE username='$N'";
    if ($db->query($sql) === TRUE) 
	{
     
    } 
	  
	  }
	  
      
	  }
	   else{
	 $sql="SELECT * FROM accept WHERE username='$N'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
     
      $count1 = mysqli_num_rows($result);
	
      if($count1 >= 1) 
	  {
	  echo "Accept Your reqest";
	  }
	  else
	  {
	  
	  }
	  
	      }
		  $sql="SELECT * FROM off WHERE username='$N'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
     
      $count1 = mysqli_num_rows($result);
	
      if($count1 >= 1) 
	  {
	  echo "Reject Your reqest";
	  $sql = "DELETE FROM off WHERE username='$N'";
    if ($db->query($sql) === TRUE) 
	{
     
    } 
	  
	  }
	  }
	  
   ?>