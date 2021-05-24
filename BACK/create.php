<?php 
include('../db_connect.php');

?>
<?php
/* initialisation des variables */

if(isset($_POST['mots'])){ /* Permet d'éviter l'envoi de données au chargement de la page si le formulaire est vide */
	$mots = stripslashes($_POST['mots']); 
	$categories = addslashes($_POST['categories']); 
	$definitions = addslashes($_POST['definitions']);

/* CREATE (car le code reviens sur cette page (dans saisie.php => action="index.php"*/ 
$create = mysqli_query($link, "INSERT INTO lexique VALUES('', '".$mots."', '".$categories."', '".$definitions."')") or die(mysqli_error($link));
}

if($create) {
    echo '<script>window.location="manage.php?page=2";</script>';//redirection vers manage.php à la fin de l'update.
  } else {
    echo 'echec'; //si erreur
  }

?>


<div class="container">
	<div class="row mt-5">
		<div class="col-12">

			<?php

echo 'Nouveau mot: ';
echo '<br/>';
echo '<form method="POST" action="create.php?page=1">';
echo '<input type="text" name="mots" />'; 
echo '<br/>';
echo '<br/>';
echo 'Nouvelle catégorie: ';
echo '<br/>';
echo '<form method="POST" action="create.php?page=1">';
echo '<select name="categories" id="categories">';
echo '	<option value=""></option>';
echo '	<option value="nom">nom</option>';
echo '	<option value="pronom">pronom</option>';
echo '	<option value="verbe">verbe</option>';
echo '	<option value="adjectif">"adjectif"</option>';
echo '  </select>';
echo '<br/>';
echo '<br/>';
echo 'Nouvelle définition: ';
echo '<br/>';
echo '<textarea type="text" name="definitions" rows="5" style="width: 400px"></textarea>';
echo '<br/>';
echo '<input type="submit" value="SAVE" />'; 
echo '</form>';
echo '</div>';

?>


		</div>
	</div>
</div>