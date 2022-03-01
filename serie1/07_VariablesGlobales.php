<link rel="shortcut icon" href="#" /> <!-- pour éviter le message favicon.ico dans la fenêtre output -->
<?php

$ville1 = "Lausanne";
$GLOBALS["ville2"] = "Geneve";

function afficheVillesV1() {
    echo "Depuis la fonction afficheVillesV1() : ", $ville1, "<BR>"; // La variable $ville n'est pas connue ici
    echo "Depuis la fonction afficheVillesV1() : ", $GLOBALS["ville2"], "<BR>";
}

function afficheVillesV2() {
    global $ville1; // permet de réutiliser la variable $ville1 (qui est par défaut non visible c.f. exemple précédant)
    echo "Depuis la fonction afficheVillesV2() : ", $ville1, "<BR>";
    echo "Depuis la fonction afficheVillesV2() : ", $GLOBALS["ville2"], "<BR>";
}

afficheVillesV1();
afficheVillesV2();

echo "<pre>";
print_r($GLOBALS); // Le tableau $GLOBALS contient déjà pleins d'informations
echo "</pre>";