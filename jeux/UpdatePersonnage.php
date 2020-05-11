<?php
    

    class UpdatePersonnage
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
    
       
        public function modifiePersonnage(Personnage $perso)
        {
            
            $q = $this->_bdd->prepare("UPDATE personnages SET nom=:nom, degats=:degats WHERE id=:id");
            
            $q->bindValue(":id", $perso->id(), PDO::PARAM_INT);
            $q->bindValue(':nom', $perso->nom());

            $q->bindValue(":degats", $perso->degats(), PDO::PARAM_INT);
           
            $q->execute();        
            
            
        }
    }
    




?>