<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>ma page php</title>
</head>

<body>

    <?php include("include/entete.php"); ?>

    <?php include("include/menu.php"); ?>

    <!-- Le corps -->

    <div id="corps">
        <h1>Mon super site</h1>

        <p>
            Bienvenue sur mon super site !<br /> Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
        </p>
    </div>

    <?php 
    
        if(isset($_POST['prenom'])){

                if($_POST['prenom']!=""){
                    echo "Votre prénom a été bien rempli.";
                    
                }

                else{
                    include("include/formulaireDonneesPost.php");
                }
        } 
        else{
            include("include/formulaires/formulaireDonneesPost.php");
        }
        
    ?>

    <?php include("include/formulaires/formulaireDonneesGet.php"); ?>

    <?php include("include/formulaires/formulaireMdp.php"); ?>

    <?php include("include/formulaires/formulaireImg.php"); ?>

<?php   

compteur();

function compteur() {
    
    $monfichier = fopen('compteur.txt', 'r+');		// ouvrir le fichier

    $count=0;

    fseek($monfichier, 0);	                    // va replacer le curseur au début du fichier 
    
    $num = fgets($monfichier);			    	// lire ligne par ligne

    //$num = fgetc($monfichier);			     // lire caractère par caractère avec la fonction

    $count = $count + $num;
    
    fputs($monfichier, $count);			


    fclose($monfichier);	



}

?>


<?php phpinfo(); ?>



    <!-- Le pied de page -->

    <?php include("include/piedPage.php"); ?>

</body>

</html>