<?php
require_once('Vehicule.php');
class Voiture extends Vehicule
{
    
    function __construct($couleur, $nbRoues)
    {
        parent::__construct($couleur, $nbRoues);
    }

}
