<?php
class Personnage
{
    //Variables pour définir le nom/prenom/pseudo du personnage
    private $nom;
    private $prenom;
    private $pseudo;
    //Variables pour définir la race/classe du personnage
    private $race;
    private $classe;
    //Variables pour définir les statistiques du personnage
    private $pointsDeVie;
    private $force;
    private $agilite;
    private $intelligence;
    private $chanceDeCoupCritique;
    private $mana;
    //Variable pour définir les sorts/équipements du personnage
    private $sort1;
    private $sort2;
    private $slotItem1;
    private $slotItem2;
    public function __construct($nom, $prenom, $pseudo, $race)
    {
        $this->setNomDuPersonnage($nom, $prenom, $pseudo);
        $this->setRacePersonnage($race);
    }
    public function setNomDuPersonnage($nom, $prenom, $pseudo)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->pseudo = $pseudo;
    }
    public function setRacePersonnage($race){
        $this->race = $race;
    }
    public function affichageCompletDuPersonnage()
    {
        echo "<h1>".$this->prenom." ' ".$this->pseudo." ' ".$this->nom."</h1>";
        echo "<h4>Race: ".$this->race.".</h4>";
    }
}
