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


$sql= "INSERT INTO BLOG_TABLE (Title, Blog) VALUES ('".$_POST['title']."','".$_POST['blog']."')";

  if($conn->query($sql))
  {
     require 'viewBlog.php';

   }
  else{
   echo $sql;
 }
}

 $conn->close();
 ?>
