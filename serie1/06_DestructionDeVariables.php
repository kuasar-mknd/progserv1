<link rel="shortcut icon" href="#" /> <!-- pour éviter le message favicon.ico dans la fenêtre output -->
<?php
$variable1 = "Super ";
$variable2 = "Chouette";
echo $variable1, $variable2, "<BR>";
unset($variable1);                                  // unset(...) permet de 'détruire' $variable1
echo isset($variable), "<BR>";                      // isset(...) permet de savoir si une variable existe. Pas très pratique les booléens à false ... => utilisation de var_dump()
var_dump (isset($variable1));                       // ah... le message est plus clair
echo "<BR>";
echo $variable1, $variable2, "<BR>";                // Ce n'est pas parce qu'une variable n'existe plus qu'on ne peut pas l'utiliser... ;-)