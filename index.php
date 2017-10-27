<?php
include ("class/Personnage.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wow</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <div class="row">
            <div class="col-lg-5">
                <?php $Thrall = new Personnage("Frostwolf", "Thrall", "Chaman du cercle terrestre", "Orc", "Chaman", "100", "10", "15", "20", "3", "100", "Chaine d'éclair", "Vague de soin", "Doomhammer", ""); 
                    $Thrall->affichageCompletDuPersonnage(); ?>
            </div>
            <div class="col-lg-2 ">
                <br><br><br><br><br><br><br><br>
                <h1><b>VS</b></h1>
            </div>
            <div class="col-lg-5">
            <?php $Thrall = new Personnage("Hellscream", "Garosh", "Chef de guerre", "Orc", "Guerrier", "120", "20", "10", "10", "5", "50", "Frappe héroique", "Attaque de mélée", "Gorehowl", ""); 
                    $Thrall->affichageCompletDuPersonnage(); ?>
            </div>
        </div>
    </section>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
// include("class/Voiture.php");

// // instanciation de ma voiture
// $bagnole = new Voiture(20);
// $bagnole->affichageTableauDeBord();

// $bagnole2 = new Voiture(9);
// $bagnole2->affichageTableauDeBord();

// $bagnole3 = new Voiture(12);
// $bagnole3->affichageTableauDeBord();

// $bagnole4 = new Voiture(14);
// $bagnole4->affichageTableauDeBord();

// $bagnole5 = new Voiture(23);
// $bagnole5->affichageTableauDeBord();
// include("class/Personnage.php");

// $Thrall = new Personnage( "Frostwolf","Thrall","Chaman du cercle terrestre", "Orc");
// $Thrall->affichageCompletDuPersonnage();

echo "Bonjour je suis un garçon plein d'ambitions.";

