<link rel="shortcut icon" href="#" /> <!-- pour éviter le message favicon.ico dans la fenêtre output -->
<?php

$chaine1 = 'CECI est une chaine'; // chaine apostrophe
$chaine2 = "CECI est une chaine"; // chaine guillemet
$chaine3 = 'ceci est une chaine';
$chaine4 = "cool";

// Quelle différence entre apostrophe et guillemet ?
echo "$chaine4 les guillemets", '<BR>';
echo '$chaine4 les apostrophes', '<BR>';
// Remarque : La coloration syntaxique est bien utile n'est ce pas :-)


// Si on ne veut pas que la variable soit remplacée par sa valeur avec les guillemets, il faut "échapper" la variable avec le caractère \
echo "La variable \$chaine4 vaut : $chaine4. Vive le caractère d'échappement '\\'", '<BR>';
// Si on veut afficher les apostrophes dans une chaine délimitée avec des apostrophes, il faut les "échapper".
echo 'Ce n\'est pas compliqué d\'afficher des \'simples\' guillemets. Vive le caractère d\'échappement \'\\\'' , '<BR>';

// Il existe une autre manière de définir une chaîne de caractère avec :
// <<<unNomQuelconque
//     une chaine de caractère
//     qui peut être sur plusieurs lignes et
//     terminer la chaîne avec 
// unNomQuelconque
// Cette manière de définir une chaîne s'appelle Heredoc
$chaineHeredoc =<<<exempleHeredoc
        Exemple d'une chaine sur
        plusieurs lignes
        avec la syntaxe Heredoc (remplacement du nom de variable par sa valeur) !
        la variable \$chaine4 vaut : "$chaine4".
exempleHeredoc;

echo $chaineHeredoc, '<BR>';

// La dernière manière de définir une chaîne de caractère est 
// <<<'unNomQuelconque'
//     une chaine de caractère
//     qui peut être sur plusieurs lignes et 
//     terminer la chaîne avec
// unNomQuelconque
// Cette manière de définir une chaîne s'appelle Nowdoc
$chaineNowdoc =<<<'exempleNowdoc'
        Exemple d'une chaine sur
        plusieurs lignes
        avec la syntaxe Nowdoc (PAS de remplacement du nom de variable par sa valeur)
        la variable \$chaine4 vaut : "$chaine4".
exempleNowdoc;

echo $chaineNowdoc, '<BR>';

echo '<a href="http://php.net/manual/fr/language.types.string.php">Documentation officielle</a>';