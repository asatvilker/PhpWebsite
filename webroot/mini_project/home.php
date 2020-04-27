<?php
  session_start();

 ?>

<html>
<head lang="en">
   <meta charset="utf-8">
   <title>Layouts</title>
   <link rel="stylesheet" href="reset.css" type="text/css"/>
   <link rel="stylesheet" href="home.css" type="text/css"/>
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
      <a href="home.html">About me</a>
      <a href="#bio">Portfolio</a>
      <a href="viewBlog.php">Blog</a>
      <a href="contact.html">Contact</a>
  </nav>
  <article>
    <div class="aboutme">
      <section>
        <h2>About me</h2>
        <figure>
          <img src="IMG_6293.JPG" height="200em" width="180em">
        </figure>
      </section>
      <p>I am a first year student studying Computer Science at Queen Mary University of London. I have acquired many skills on my journey so far and theres much more to come. Read on to find out exactly what I do and love, or feel free to have a look at some of my work.</p>
    </div>

    <div class="education">
      <section>
        <h2>Education</h2>
      </section>
      <table>
        <tbody>
          <tr>
            <th>2012-2017</th>
            <td>Friern Barnet School (yr7-11)</td>
          </tr>
          <tr>
            <th>2017-2019</th>
            <td>Mill Hill County High School (yr12-13)</td>
          </tr>
          <tr>
            <th>2019-2023</th>
            <td>Queen Mary University (integrated masters degree)</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class= "skills">
      <section>
        <h2>Skills</h2>
      </section>
      <ul class="list1">
        <li>Programming
          <ul>
            <li>Java</li>
            <li>Python</li>
          </ul>
        </li>
        <li>Web design
          <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>Java script</li>
            <li>PHP</li>
          </ul>
        </li>
        <li>Databases
          <ul>
            <li>SQL</li>
            <li>Sqlite3 (Python)</li>
            <li>Database design</li>
          </ul>
        </li>
        <li>Statistical analysis
          <ul>
            <li>Hypothesis testing</li>
            <li>Modelling distributions</li>
          </ul>
        </li>
      </ul>
    </div>
  </article>
  <aside>
    <h3>Top Interests</h3>
    <ul class="list2">
      <li>Machine learning</li>
      <li>Web design</li>
      <li>Programming</li>
      <li>Cloud computing</li>
      <li>Mathematics</li>
    </ul>
  </aside>
  <footer>
    <p>
      <em>Copyright &copy; AdamSatvilker</em>
    </p>
    <p>Email: asatvilker.as@gmail.com</p>
  </footer>
</body>
</html>
