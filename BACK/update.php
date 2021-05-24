<?php

include('../db_connect.php');
$id = $_GET['id'];


if(isset($_POST['update'])) {
  
  //Initialisation
  $mots = $_POST['mots'];
  $categories =  addslashes($_POST['categories']);
  $definitions =  addslashes($_POST['definitions']);
  
  //Requête
  $edit = mysqli_query($link, "UPDATE lexique SET mots='".$mots."', categories='".$categories."', definitions='".$definitions."' WHERE id = '".$id."' ");

  if($edit) {
    echo '<script>window.location="manage.php?page=2";</script>';//redirection versmanage.php à la fin de l'update.
  } else {
    echo 'echec'; //si erreur
  }
}

// Récupère les données dans la table
$read = mysqli_query($link, "SELECT * FROM lexique WHERE id='".$id."'");
$data = mysqli_fetch_assoc($read); // fetch les données
?>

<h3>Update Data</h3>

<div class="container">
  <div class="row mt-5">
    <div class="col-12">

      <form method="POST" action="#">
        <input type="text" name="mots" value="<?php echo $data['mots'] ?>" Required>
        <select name="categories" id="categories">;
        <option value=""></option>;
        <option value="nom">nom</option>;
        <option value="pronom">pronom</option>;
        <option value="verbe">verbe</option>;
        <option value="adjectif">adjectif</option>';
        </select>
        <input type="text" name="definitions" rows='5' style="width: 400px;" value="<?php echo $data['definitions'] ?>"
          Required>
        <input type="submit" name="update" value="update">
      </form>

    </div>
  </div>
</div>