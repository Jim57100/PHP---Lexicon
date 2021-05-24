<?php 
session_start();

if(isset($_POST['name']) && isset($_POST['password'])) {
  // on essaie de se connecter
  $link = mysqli_connect('localhost','root','','db_lexique') or die("Unable To connect");
  
  //on intérroge la table user qui contient le nom et le mdp
  $result = mysqli_query($link,"SELECT * FROM user WHERE name='" . $_POST['name'] . "' and password = '". $_POST['password']."'");
  
  //on récupère les données sous forme de tableau
  $row  = mysqli_fetch_array($result);
  
  //S'il y a des données dans le tableau, on les mets dans $SESSION
  if(is_array($row)) {
  $_SESSION["id"] = $row['id'];
  $_SESSION["name"] = $row['name'];
  $_SESSION['logged'] = true;
  } else {
   echo '<script>window.alert("Invalid Username or Password!")</script>';
  }
}
if(isset($_SESSION["id"])) {
header("Location: index.php?page=2");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./styleback.css">
<title>Connexion</title>
</head>
<body>



<div class="container">
<!-- Formulaire -->
<form method="POST" action="#">
  <p>Bienvenue</p>
  <input type="text" name="name" placeholder="name"><br>
  <input type="password" name="password" placeholder="Mot de passe"><br>
  <input type="submit" value="Connexion"><br>
  <!--<a href="#">Mot de passe oublié</a></form>-->
  <!-- OMBRES -->
  
  <div class="drop drop-1"></div><div class="drop drop-2"></div><div class="drop drop-3"></div><div class="drop drop-4"></div><div class="drop drop-5"></div>
  
  </div>
  
  
</body></html>