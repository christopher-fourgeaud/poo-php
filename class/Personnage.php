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
    // niveau du personnage
    private $niveau = 1;
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
    public function __construct($nom, $prenom, $pseudo, $race, $classe, $pointsDeVie, $force, $agilite, $intelligence, $chanceDeCoupCritique, $mana, $sort1, $sort2, $slotItem1, $slotItem2)
    {
        $this->setNomDuPersonnage($nom, $prenom, $pseudo);
        $this->setRacePersonnage($race);
        $this->setClassePersonnage($classe);
        $this->setStatsPersonnage($pointsDeVie, $force, $agilite, $intelligence, $chanceDeCoupCritique, $mana);
        $this->setSorts($sort1, $sort2);
        $this->setItemSlots($slotItem1, $slotItem2);
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
    public function setClassePersonnage($classe){
        $this->classe = $classe;
    }
    public function setStatsPersonnage($pointsDeVie, $force, $agilite, $intelligence, $chanceDeCoupCritique, $mana){
        $this->pointsDeVie = $pointsDeVie;
        $this->force = $force;
        $this->agilite = $agilite;
        $this->intelligence = $intelligence;
        $this->chanceDeCoupCritique = $chanceDeCoupCritique;
        $this->mana = $mana;
    }
    public function setSorts($sort1, $sort2){
        $this->sort1 = $sort1;
        $this->sort2 = $sort2;
    }
    public function setItemSlots($slotItem1, $slotItem2){
        $this->slotItem1 = $slotItem1;
        $this->slotItem2 = $slotItem2;
    }
    public function affichageCompletDuPersonnage()
    {
        echo "<ul>
        <h4><b>Détail du personnage: </b></h4>
        <li>Nom complet: ".$this->prenom." ' ".$this->pseudo." ' ".$this->nom."</li>
        <li>Race: ".$this->race."</li>
        <li>Classe: ".$this->classe."</li>
        <h4><b>Statistiques: </b></h4>
        <li>Points de vie: ".$this->pointsDeVie."</li>
        <li>Force: ".$this->force."</li>
        <li>Agilité: ".$this->agilite."</li>
        <li>Intelligence: ".$this->intelligence."</li>
        <li>Chance de coup critique: ".$this->chanceDeCoupCritique."%</li>
        <li>Montant de mana: ".$this->mana."</li>
        <h4><b>Sorts: </b></h4>
        <li>Sort n°1: ".$this->sort1."</li>
        <li>Sort n°2: ".$this->sort2."</li>
        <h4><b>Arme(s): </b></h4>
        <li>Arme n°1: ".$this->slotItem1."</li>
        <li>Arme n°2: ".$this->slotItem2."</li>
        </ul>";
    }
}