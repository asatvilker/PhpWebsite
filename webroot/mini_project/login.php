<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");
// Creates connection
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
// Checks connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == POST){

 $sql = "SELECT * FROM USERS";
 $result = $conn->query($sql);

 if ($result->num_rows > 0)
 {
    // output data of each row
    require 'addpost.html';
  }
  else
  {
    echo "0 results";
  }
}
$conn->close();
?>
