<?php
include("Config.php");
   session_start();
   ?>
<!DOCTYPE html >
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Untitled Document</title>
</head>

<body bgcolor="#0099FF">
<ul>
<li><a href="showreqst.php"><h2>Show reqst</h2></a></li>
<li><a href="logout.php"><h2>logout</h2></a></li>
</ul>
<?php
include("Config.php");
   session_start();
   $N=$_SESSION['myusername'];
   $sql="SELECT * FROM aply";
   $result = $db->query($sql);
 echo "<table border='1'>
<tr>
<th>User Name</th>
<th>Name</th>
<th>start date</th>
<th>End date</th>
<th>Total</th>
<th>Cause</th>
</tr>";
   while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['sdate'] . "</td>";
echo "<td>" . $row['edate'] . "</td>";
echo "<td>" . $row['offdayr'] . "</td>";
echo "<td>" . $row['message'] . "</td>";
echo '<form method="post">
               
                <td><input type="hidden" name="userReq" value='.$row['username'].'></td>
                <td><input type="submit" name="accept" value="Accept Request" ></td>
                <td><input type="submit" name="decline" value="Decline Request" ></td>';   
            }
                echo '</form>';
echo "</tr>";


echo "</table>";
if(isset($_POST['accept'])){
                $sql="SELECT * FROM aply WHERE username='$_POST[userReq]'";
   $result = $db->query($sql);
   while($row = mysqli_fetch_array($result))
{
$myusername=$row['username'];
$myname=$row['name'];
$mypos=$row['postion'];
$mysdate=$row['sdate'];
$myedate=$row['edate'];
$mydater=$row['offdayr'];
}



$sql="SELECT * FROM emply WHERE username='$_POST[userReq]'";
   $result = $db->query($sql);
   while($row = mysqli_fetch_array($result))
{

$mydate=$row['offday'];
}

$date=$mydate-$mydater;


$sql = "UPDATE emply SET offday='$date' WHERE username='$_POST[userReq]'";

if ($db->query($sql) === TRUE)
 {
    $sql = "INSERT INTO accept (username,name,postion,sdate,edate)VALUES ('$myusername', '$myname','$mypos','$mysdate','$myedate')"; 
if ($db->query($sql) === TRUE) {
   
   $sql = "DELETE FROM aply WHERE username='$_POST[userReq]'";
    if ($db->query($sql) === TRUE) {
	 
    
} else {
    echo "Error deleting record: " . $db->error;
}

   
}
 } 
else
 {
    echo "Error updating record";
  }
             }
 if(isset($_POST['decline']))
    {
	//$myusername = mysqli_real_escape_string($_POST[userReq]);
	$sql="INSERT INTO off (username,cause) VALUES ('$_POST[userReq]','Not granted')"; 
	if ($db->query($sql) === TRUE)
	    {
		       
                $sql = "DELETE FROM aply WHERE username='$_POST[userReq]'";

                if ($db->query($sql) === TRUE) 
	           {
                 
                } 
              else {
                 echo "Error deleting record: " . $db->error;
                  }

          }   
    }
  ?>
  
</body>
</html>
