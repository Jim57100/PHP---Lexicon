<!-- Messages d'alerte et confirmation pour l'update et le delete -->
<?php
if(isset($_GET['update'])){
  echo '<script>alert("udpdate successful")</script>';
}

if(isset($_GET['delete'])){
  $delete = $_GET['delete'];
  mysqli_query($link, "DELETE FROM lexique WHERE id = '".$delete."' ");
  echo '<script>alert("delete successful")</script>';
}
?>


<!-- READ - on veut afficher toutes les données de la table pour pouvoir les modifier ou les supprimer -->

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Mots</th>
      <th scope="col">Categorie</th>
      <th scope="col">Definitions</th>
			<th scope="col">Modifier</th>
			<th scope="col">Supprimer</th>
    </tr>
	</thead>
	
  <tbody> <!--Corps de la table-->

<?php  /* Ouvre php dans le corps de la table */ 

$read = mysqli_query($link, "SELECT * FROM lexique");

while ($data = mysqli_fetch_assoc($read)){
	
	?> <!-- On ferme le php pour simplifer l'écriture (on repasse en html pour ne pas tout écrire avec des echos)-->

    <tr>
      <th scope="row"><?php echo $data['id']; ?></th>
      <td><?php echo $data['mots']; ?></td> 
      <td><?php echo $data['categories']; ?></td>
      <td><?php echo $data['definitions']; ?></td>
			<td><a href="index.php?page=3&id=<?php echo $data['id'];?>" class="btn btn-info">Edit</a></td>
			<td><a href="index.php?delete=<?php echo $data['id'];?>" onclick="return(confirm('ok ?'))" class="btn btn-danger">Delete</a></td>
		</tr>
	
<?php
} /* et on referme la boucle. */
?>




</tbody>
</table>
 

