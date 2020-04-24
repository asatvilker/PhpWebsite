<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");
// Creates connection
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
// Checks connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == POST){

 $sql = "SELECT * FROM USERS WHERE email = $_POST['Email'] AND password = $_POST['Password']";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
    // output data of each row
    require 'addpost.html';
} else {
    echo "0 results";
}
$conn->close();
?>
