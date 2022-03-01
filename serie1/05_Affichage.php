<link rel="shortcut icon" href="#" /> <!-- pour éviter le message favicon.ico dans la fenêtre output -->
<?php
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////// Il existe différentes manières d'afficher des informations en php ///////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
const BR = "<br>";
const MA_CONST = 5;
$variable_1 = 1;
$variable_2_tab = [1,2,3];

print "Affichage avec print : ";
/////////////////////////////
print MA_CONST;
print BR;
print $variable_1;
print BR;
print ($variable_1); // On peut utiliser les parenthèses
print BR;
print $variable_2_tab; // print n'aime pas les tableaux (produit un "warning")
print BR;
print BR;

print "Affichage avec print_r : ";
/////////////////////////////
print_r(MA_CONST);
print_r($variable_1);
print_r(BR);
print_r($variable_2_tab); // print_r fonctionne avec les tableaux :-)
print_r(BR);
print_r(BR);

echo "Affichage avec echo : ";
///////////////////////////
echo MA_CONST, BR, $variable_1, BR, $variable_2_tab, BR, BR;  // echo n'aime pas les tableaux (produit un warning)
echo MA_CONST, BR, $variable_1, BR, BR;

echo "Affichage avec var_dump()";
/////////////////////////////////
var_dump(MA_CONST); // Les parenthèses sont nécessaires !
echo BR;
var_dump($variable_1);
echo BR;
var_dump($variable_2_tab); // var_dump est spécialement recommandé pour les tableaux
echo BR;