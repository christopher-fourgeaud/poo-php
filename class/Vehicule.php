<?php
class Vehicule
{
    protected $couleur;
    protected $nbRoues;
    protected $etatDeMarche;
    protected $poids;
    protected $nbVitesse;

    function __construct($couleur, $nbRoues)
    {
        $this->setCouleur($couleur);
        $this->setnbRoues($nbRoues);
    }
    // Set la couleur du vehicule
    public function setCouleur($couleur){
        $this->couleur=$couleur;
    }
    // Récupère la couleur du vehicule
    public function getCouleur(){
        return $this->couleur;
    }
    // Set le nombre de roues du vehicule
    public function setnbRoues($nbRoues){
        $this->nbRoues=$nbRoues;
    }
    // Récupère le nombre de roues du vehicule
    public function getnbRoues(){
        return $this->nbRoues;
    }

}