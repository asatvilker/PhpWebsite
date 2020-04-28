<?php session_start();

?>

<html>
<head lang="en">
   <meta charset="utf-8">
   <title>Layouts</title>
   <link rel="stylesheet" href="reset.css" type="text/css"/>
   <link rel="stylesheet" href="addpost.css" type="text/css"/>

</head>
<body>

  <article>
    <h2>Add Blog</h2>
    <form method="post" action="submitpost.php">
      <p>

        <input id="title" type="text" name="title" placeholder="Title" value="<?php if(isset($_SESSION['Title'])){echo htmlentities($_SESSION['Title']);}?>">
      </p>
      <p>

        <textarea id="maintext" name="blog" placeholder="Enter text here..." rows="20" cols="95" value="<?php if(isset($_SESSION['Blog'])){echo htmlentities($_SESSION['Blog']);}?>"></textarea>
      </p>
      <p>
      <input id ="preview" type="submit" value="preview" formaction="preview.php">
      <input id="submit" type="submit"  class="addbutton" value="Post">
      <input type='button' value='Clear'  class="clearbutton" onclick= "clearcontent()">
      </p>
    </form>

  </article>
  <script src="function.js"></script>
</body>
</html>
