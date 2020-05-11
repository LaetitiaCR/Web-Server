<?php
    

class InsertPersonnage
{
    private $_bdd;
   



    public function __construct($bdd) // Constructeur demandant 2 paramètres
    {

        $this->setbdd($bdd); 
    }


    public function setbdd($bdd)
    {
      // L'identifiant du personnage sera, quoi qu'il arrive, un nombre entier.
      $this->_bdd = $bdd;
    }

    public function addPersonnage(Personnage $perso)
    {
        
           

            $q = $this->_bdd->prepare('INSERT INTO personnages(id, nom, degats) VALUES(:id, :nom, :degats)');

            $q->bindValue(':id', $perso->id());
            $q->bindValue(':nom', $perso->nom());
            $q->bindValue(':degats', $perso->degats());
           
          

            $q->execute();
            
            
    }
}

?>