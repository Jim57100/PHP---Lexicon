<?php 
include('../db_connect.php');
session_start();
/*if (!($_SESSION['logged'])) {
  header('Location: login.php');
}*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS et JS -->
  <link href="../bootstrap/bootstrap.min.css" rel="stylesheet">

  <style>.login{
	height: 80vh;
	display: flex;
	justify-content: center;
	align-items: center;
}

html,
body{
background-color: rgb(236, 232, 232);

}</style>
  <title>Lexique</title>
</head>

<body>
<header class="sticky-top">
    <nav class="navbar bg-dark navbar-expand-md navbar-white">
      <a class="navbar-brand" href="index.php">
        <img src="../images/logo_JMS.png" width="60px" height="60px"/><span style="color: white; font-size: 1em"> LEXIQUE - <i>back</i></span>
      </a>
      <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarContent" class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.php?page=1">Nouveau</a></li>
          <li class="nav-item"><a class="nav-link" href="logout.php">Déconnexion</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <?php
 

 if (isset($_SESSION['name']) && isset($_SESSION['logged'])) {
  
 /////////////////////  ETAT CONNECTE
     if(isset($_GET['page']) && $_GET['page'] !=NULL){
 
            $page = intval($_GET['page']);
 
             if ($page == 1){
               include('create.php'); 
             }
             elseif($page == 2){
               include('manage.php');
             }
             elseif($page == 3){
               include('update.php');
             }
             else {
               include('manage.php');
             } 
       } 
       else {
         include('manage.php');
       }
 
 ////////////////////////  FIN ETAT CONNECTE
     }
 
 else {
   echo '<a href="login.php" class="login">Connexion</a>';
 }
 
 
 ?>


<footer>
  <div class="footer mt-3 p-3 fixed-bottom bg-dark" style="height: 80px;">
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
	</script>
<script src="../bootstrap/bootstrap.min.js"></script>
</body>
</html>