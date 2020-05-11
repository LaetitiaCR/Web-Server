<?php

//phpinfo();


try
{

  $dsn = 'mysql:dbname=jeux;host=127.0.0.1;port=3308;charset=utf8';
 
  $user = 'Laetitia';
  $password = 'admin';
  $bdd = new PDO($dsn, $user, $password);

  $reponse = $bdd->query('SELECT * FROM jeux_video');
 
  
  // On affiche chaque entrée une à une
  while ($donnees = $reponse->fetch())

  {
    ?>
      <p>
      <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
      Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> euros !<br />
      Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
      <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
      </p>
    <?php
  }

  
 

  $reponse->closeCursor(); // Termine le traitement de la requête

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}




try
{

$reponse = $bdd->query('SELECT nom FROM jeux_video');

  while ($donnees = $reponse->fetch())
  {
	  echo $donnees['nom'] . '<br />';
  }
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}



?>