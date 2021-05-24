<div class="container">

  <div class="row" style="height: 200px;">
    <div class="col-12 pt-5 text-center">
      <!-- Générer le clavier -->
      <?php
        $alphabet = str_split('abcdefghijklmnopqrstuvwxyz');

        for ($i = 0; $i <= count($alphabet)-1; $i++){
          echo '<a href="index.php?lettre='.$alphabet[$i].'"><span class="myKeyboard text-center">'.strtoupper($alphabet[$i]).'</span></a>';
        }
      ?>
    </div>
  </div>

  <table class="table">

    <thead>
      <tr>
        <th scope="col">Mots</th>
        <th scope="col">Definitions</th>
        <th scope="col">Categories</th>
      </tr>
    </thead>

    <tbody>
      <!--Corps de la table-->
      <?php  /* Ouvre php dans le corps de la table */ 
       
       $lettre = mysqli_real_escape_string($link, $_GET['lettre']); //protection contre les injections SQL
       
        if (in_array($lettre, $alphabet)){ //protection supplémentaire. On exclu toute autre possibilité de valeur en vérifiant si la valeur de ?lettre=a est dans le tableau alphabet.

        $read = mysqli_query($link, "SELECT * FROM lexique WHERE mots LIKE '".$lettre."%' ");

        while ($data = mysqli_fetch_assoc($read)){
	
	?>
      <!-- On ferme le php pour simplifer l'écriture (on repasse en html pour ne pas tout écrire avec des echos)-->

      <tr>
        <td><?php echo $data['mots']; ?></td>
        <td><?php echo $data['definitions']; ?></td>
      </tr>

      <?php
  }  } /* et on referme la boucle. */
  ?>

    </tbody>
  </table>

</div>