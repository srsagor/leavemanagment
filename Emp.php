<?php
   include("Config.php");
   //session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM emply WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
     
      $count = mysqli_num_rows($result);
	
      if($count == 1) 
	    {
	      
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         header("location: Emplypage.php");
		 }
		
	  else {
         echo "Your Login Name or Password is invalid";
           }
   }
?>

<!DOCTYPE html>
<html >
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style.css">
<title>Untitled Document</title>
</head>

<body bgcolor="#0099FF">
<h1 align="center">Office Leave Managment System</h1>
<img src="emp.png" width="145"  height="193"  align="center"/>
<h2 align="center" >Login As Employee</h2>
 <form  align="center"  action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box" required/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box"  required/><br/><br />
                  <input type = "submit" value = " Submit "/><br />
</form>
			   <a href="reg.php"><h3 align="center" > If You are new employee sing up frist </h3></a>
			   <a href="index.php"><h3 align="center" > Back Home  </h3></a>
</body>
</html>
