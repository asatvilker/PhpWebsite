<?php
session_start();
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
$email=$_POST['Email'];
$pass=$_POST['Password'];
$query = "SELECT * FROM DETAILS WHERE email LIKE '".$_POST['Email']."' AND BINARY password LIKE '".$_POST['Password']."'";
 $result = $conn->query($query);

 if ($result->num_rows > 0)
 {
    $_SESSION['user']='active';
    // output data of each row
    require 'addpost.php';
  }
  else
  {
    ?>
    <html>
    <head lang="en">
       <meta charset="utf-8">
       <title>Layouts</title>
       <link rel="stylesheet" href="reset.css" type="text/css"/>
       <link rel="stylesheet" href="login.css" type="text/css"/>
       <style>
       .error
       {
         color: red;
         position: relative;
         right: 15em;
         top: 16em;
       }
       </style>
    </head>
    <body>

      <article>
        <h2>Sign in</h2>
        <h3 class="error">Please eneter valid username and password</h3>
        <form action="login.php" method="post">
          <p>

            <input type="email" name="Email" required placeholder="Email">
          </p>
          <p>

            <input type="password" name="Password" minlength="8" required placeholder="Password">
          </p>
          <p>
          <input type="submit" value="Login"  class="button" >

          </p>
        </form>

      </article>

    </body>
    </html>
    <?php
  }
}

$conn->close();
?>
