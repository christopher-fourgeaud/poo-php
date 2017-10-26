<?php
class Voiture
{
    // Constante qui définit la valeur de l'indicateur d'état de la jauge d'essence
    const CAPACITE_RESERVOIR = 60;
    const INDICATEUR_ROUGE = 10;
    //Variable de class
    public static $nbVoiture = 0;
    // Définition des variables privées de ma class Voiture
    private $reservoir;
    private $indicReservoirRouge;
    // Constructeur
    public function __construct($reservoir)
    {
        $this->setReservoir($reservoir);
        self::$nbVoiture++;
    }
    // Fonction pour definir le niveau de réservoir et l'état de l'indicateur d'essence
    public function setReservoir($reservoir)
    {
        $this->reservoir = $reservoir;
        $this->indicReservoirRouge = ($reservoir < self::INDICATEUR_ROUGE);
        // Same shit
        // if ($reservoir < self::INDICATEUR_ROUGE) {
        //     $this->indicReservoirRouge = true;
        // }else{
        //     $this->indicReservoirRouge = false;
        // }
    }
    // Fonction d'affichage des informations du tableau de bord de ma voiture
    public function affichageTableauDeBord()
    {
        echo "<p> Le montant d'essence dans le reservoir est de: " . $this->reservoir . " litres.</p>";
        echo "<p> La limite avant que l'aiguille passe en rouge: " . self::INDICATEUR_ROUGE . " litres.</p>";
        // var_dump($this->indicReservoirRouge);
        echo "<p>Capacité reservoir: ".self::CAPACITE_RESERVOIR." litres.</p>";
        // self = permet d'acceder à la constante. :: Operateur de resolution de portée CAPACITE_RESERTVOIR = nom de la constante
        echo "<p>Nombre de voitures: ".self::$nbVoiture."</p>";
        echo "<hr>";
        
    }
}
