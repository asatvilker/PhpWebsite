<?php
  session_start();

?>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>Layouts</title>
   <link rel="stylesheet" href="reset.css" type="text/css"/>
   <link rel="stylesheet" href="portfolio.css" type="text/css"/>
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
      <a href="#bio">Portfolio</a>
      <a href="viewblog.php">Blog</a>
      <a href="contact.php">Contact</a>
  </nav>
  <article>
      <section>
          <h2>>My projects</h2>
      </section>
    <div class="container">
      <h3>Mechanics in maths simulator</h3>
      
      <div class="caption">
          <p>This was my first attempt at a software development project, I was 17 and had learned how to develop in pytho although not yet in OOP, just procedura I also learnt the stages of the developmet cycle and i implemented this when creating this software. The software is a handy little educational tool to assist young student learning about mechanics. a visual and interactive way to understand the concept of particulary projectile motion</p>
     </div>
     <div class="pdf">
        <object data='FINAL computer science project .pdf' 
        type='application/pdf' 
        width='75%' 
        height='1200em'>
        
     </div>
     
</div>

  </article>
</body>
</html>