<?php
include("Config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      $myusername = mysqli_real_escape_string($db,$_POST['username']); 
	  $myname = mysqli_real_escape_string($db,$_POST['name']);
	  $mypass = mysqli_real_escape_string($db,$_POST['passcode']);
	  $mypass1 = mysqli_real_escape_string($db,$_POST['passcode1']); 
	  $myemail = mysqli_real_escape_string($db,$_POST['email']);
	  $mypos = mysqli_real_escape_string($db,$_POST['pos']);
	  $myoff=25;
	  if($mypass==$mypass1){
	 $sql = "INSERT INTO emply (username,name,email,password,postion,offday)VALUES ('$myusername', '$myname','$myemail','$mypass','$mypos','$myoff')"; 
	 
	 if ($db->query($sql) === TRUE) {
    header("location: Emp.php");
} else {
    echo "User Name Exist";
}
	  
}
else{

echo"Two Password Not same";
}
}
?>
<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<h2>Create a new account</h2>
<form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/ required><br /><br />
                  <label>Name  :</label><input type = "text" name = "name" class = "box"  required/><br/><br />
				  <label>password  :</label><input type = "password" name = "passcode" class = "box"required/><br /><br />
				  <label>Re_password  :</label><input type = "password" name = "passcode1" class = "box"required/><br /><br />
				   <label>Email  :</label><input type = "email" name = "email" class = "box"  required/><br/><br />
				   <label>posstion  :</label><select name="pos">
				  <option value="0">0</option>
         <option value="Software Engneer">Software Engneer</option>
         <option value="Graphic digner">Graphic Deginer</option>
        <option value="Other">Other</option>
        </select><br /><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
</body>
</html>
