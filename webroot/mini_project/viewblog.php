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

 ?>
 <html>
 <head lang="en">
    <meta charset="utf-8">
    <title>Adam satvilker</title>
    <link rel="stylesheet" href="reset.css" type="text/css"/>

    <link rel="stylesheet" href="viewblog.css" type="text/css"/>
 </head>
 <body>
   <header>
     <h1>Adam Satvilker</h1>
     <?php
     if (isset($_SESSION['user']))
     {
       echo "<a href='"."logout.php"."'>Logout</a>";
     }
     else
     {
       echo "<a href='"."login.html"."'>Login</a>";
     }
     ?>
   </header>
   <nav role="navigation">

       <a href="home.php">About me</a>
       <a href="portfolio.php">Portfolio</a>
       <a href="viewblog.php">Blog</a>
       <a href="contact.php">Contact</a>

   </nav>
   <article>
     <?php
     $count = 0;
     $generalquery = "SELECT Title, Blog, Date FROM BLOGS_TABLE ORDER BY Date DESC";
     $result = $conn->query($generalquery);
     while($row = $result->fetch_assoc()) {
        $count= $count + 1;

        echo "<div id='"."disabled"."' class='"."hover"."' data-value='".$row["ID"]."'> <h3>" . $row["Title"]. "</h3> <p class="."date".">".$row["Date"]."</p><p>" . $row["Blog"]. "</p></div>";
      }
      if (isset($_SESSION['user']))
      {
        echo "<a id='"."addpost"."'href='"."addpost.php"."'>Add post</a>";
      }
      else
      {

      }
      ?>

   </article>
   <script src="viewblog.js"></script>
   <footer>
     <p>
       <em>Copyright &copy; AdamSatvilker</em>
     </p>
     <p>Email: asatvilker.as@gmail.com</p>
   </footer>
 </body>
 </html>
