<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser =  getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");
// Creates connection
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

// Checks connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

$temp= date("l jS \of F Y h:i:s A");
$temp1= strval($temp);
$sql= "INSERT INTO BLOG_TABLE ('Title', 'Blog' , 'Date') VALUES ('".$_POST['title']."','".$_POST['blog']."','".$temp1."')";

  if($conn->query($sql))
  {
     require 'viewblog.php';

   }
  else{
   echo "error";
 }
}

 $conn->close();
 ?>
