<?php
	include('db_connect.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS et JS -->
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="CSS/style.css">

  <title>Lexique - Index</title>
</head>

<body>
<header class="sticky-top">
    <nav class="navbar bg-dark navbar-expand-md navbar-white">
      <a class="navbar-brand" href="index.php">
        <img src="images/logo_JMS.png" width="60px" height="60px"/><span style="color: white; font-size: 1em"> LEXIQUE - <i>front</i></span>
      </a>
      <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarContent" class="collapse navbar-collapse justify-content-center">
      </div>
    </nav>
  </header>

    <?php 
      include('main.php');
    ?>

<footer>
  <div class="footer mt-3 p-3 fixed-bottom bg-dark" style="height: 80px;">
  </div>
</footer>


</body>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="bootstrap/bootstrap.min.js">
</script>

</body>

</html>