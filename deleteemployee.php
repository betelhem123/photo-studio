<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "blenphoto";
$connnection = new mysqli($server, $user, $password, $dbname);

if ($connnection->connect_error) {
die("Connection failed: " . $connnection->connect_error);
}
$id=mysqli_real_escape_string($connnection,$_GET['id']);
$select_sql= "DELETE FROM employeetbl WHERE id = '$id'";
if ($connnection->query($select_sql) === TRUE)
{
header("Location: listofemployees.php");
}
else
{
echo "Error deleting record: " . $connnection->error;
}
$connnection->close();
?>