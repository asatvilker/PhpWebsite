<?php
  session_start();

 ?>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>Layouts</title>
   <link rel="stylesheet" href="reset.css" type="text/css"/>

   <link rel="stylesheet" href="contact.css" type="text/css"/>
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
    <h2>Contact Me</h2>
    <div class="container">
      <div class="subcontainer">
        <img src="pngfuel.com (1).png" alt="email" class="email">
        <figcaption class="email">Email</figcaption>
        <a href="mailto: asatvilker.as@gmail.com">Personal Email: asatvilker.as@gmail.com </a>
        <a href="mailto: ec19215@qmul.ac.uk">Student Email: ec19215@qmul.ac.uk</a>
        
      </div>
      <div class="subcontainer">
        <img src="5a452570546ddca7e1fcbc7d.png" alt="phone" class="phone">
        <figcaption class="phone">Phone</figcaption>
        <p>07817928071</p>
      </div>
      <div class="subcontainer">
        <img src="pngfuel.com.png" alt="linkedin" class="linkedin">
        <figcaption class="linkedin">Linkedin</figcaption>
        <a href="https://www.linkedin.com/in/adam-satvilker/">Click here</a>
      </div>
    </div>
  </article>

  <footer>
    <p>
      <em>Copyright &copy; AdamSatvilker</em>
    </p>
    <p>Email: asatvilker.as@gmail.com</p>
  </footer>
</body>
</html>
