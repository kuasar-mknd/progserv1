<link rel="shortcut icon" href="#" /> <!-- pour éviter le message favicon.ico dans la fenêtre output -->
<?php

echo "Comment transformer des booléen :", "<BR><BR>";

echo "\$unBooleen = true;", "<BR>";
$unBooleen = true;
echo "\$entier = 1 + \$unBooleen;", "<BR>";
$entier = 1 + $unBooleen;
echo "La variable \$entier vaut : $entier", "<BR>";

echo "\$reel = 1.12 + \$unBooleen;", "<BR>";
$reel = 1.12 + $unBooleen;
echo "La variable \$reel vaut : $reel", "<BR>";

echo "\$chaine = \"Tralala\" . \$unBooleen;", "<BR>";
$chaine = "Tralala" . $unBooleen;
echo "La variable \$chaine vaut : $chaine", "<BR><BR>";

echo "\$unBooleen = false;", "<BR>";
$unBooleen = false;
echo "\$entier = 1 + \$unBooleen;", "<BR>";
$entier = 1 + $unBooleen;
echo "La variable \$entier vaut : $entier", "<BR>";

echo "\$reel = 1.12 + \$unBooleen;", "<BR>";
$reel = 1.12 + $unBooleen;
echo "La variable \$reel vaut : $reel", "<BR>";

echo "\$chaine = \"Tralala\" . \$unBooleen;", "<BR>";
$chaine = "Tralala" . $unBooleen;
echo "La variable \$chaine vaut : $chaine", "<BR><BR>";