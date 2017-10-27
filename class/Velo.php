<?php
require_once('Vehicule.php');
class Velo extends Vehicule
{
    function __construct($couleur, $nbRoues)
    {
        parent::__construct($couleur, $nbRoues);
    }
}
