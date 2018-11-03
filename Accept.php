
<?php
include("Config.php");
   session_start();
 $sql = "DELETE FROM aply WHERE username='row[username]'";

    if ($db->query($sql) === TRUE) {
     echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $db->error;
}
?>