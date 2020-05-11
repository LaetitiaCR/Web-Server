<?php

class Personnage
{
    private $_id;
    private $_nom;
    private $_degats;

    public function __construct($id, $nom, $degats) // Constructeur demandant 2 paramètres
    {
    

        $this->setId($id); 
        $this->setNom($nom);
        $this->setDegats($degats); 
        
    }

    

    public function setId($id)
    {
      // L'identifiant du personnage sera, quoi qu'il arrive, un nombre entier.
      $this->_id = (int) $id;
    }
          
    public function setNom($nom)
    {
      // On vérifie qu'il s'agit bien d'une chaîne de caractères.
      // Dont la longueur est inférieure à 30 caractères.
      if (is_string($nom) && strlen($nom) <= 30)
      {
        $this->_nom = $nom;
      }
    }

    public function setDegats($degats)
    {
      // L'identifiant du personnage sera, quoi qu'il arrive, un nombre entier.
      $this->_degats = (int) $degats;
    }

    public function id() { return $this->_id; }
    public function nom() { return $this->_nom; }
    public function degats() { return $this->_degats; }


}

?>