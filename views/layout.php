<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>A Most Simple PHP MVC</title>
  </head>
  <body>
    <header>
      <a href="/">Home</a>
      <a href="?controller=posts&action=index">Posts</a>
    </header>

      <?php require_once('routes.php') ?>

    <footer>
      Made by internet tutorial
    </footer>
  </body>
</html>
