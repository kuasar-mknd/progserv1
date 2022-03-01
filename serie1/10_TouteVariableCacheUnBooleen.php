<link rel='shortcut icon' href='#' /> <!-- pour éviter le message favicon.ico dans la fenêtre output -->
<?php

// Toutes les variables (quelque soit le type) peuvent être utilisées comme un booléen dans une condition 

$booleen1 = true;
if ($booleen1) {
    echo '$booleen1 a été traité comme true', '<BR>';
} else {
    echo '$booleen1 a été traité comme false', '<BR>';
}

$booleen2 = false;
if ($booleen2) {
    echo '$booleen2 a été traité comme true', '<BR>';
} else {
    echo '$booleen2 a été traité comme false', '<BR>';
}

$entier1 = 0;
if ($entier1) {
    echo '$entier1 a été traité comme true', '<BR>';
} else {
    echo '$entier1 a été traité comme false', '<BR>';
}

$entier2 = 12;
if ($entier2) {
    echo '$entier2 a été traité comme true', '<BR>';
} else {
    echo '$entier2 a été traité comme false', '<BR>';
}

$reel1 = 0.0;
if ($reel1) {
    echo '$reel1 a été traité comme true', '<BR>';
} else {
    echo '$reel1 a été traité comme false', '<BR>';
}

$reel2 = 3.1415;
if ($reel2) {
    echo '$reel2 a été traité comme true', '<BR>';
} else {
    echo '$reel2 a été traité comme false', '<BR>';
}

$chaine1 = '';
if ($chaine1) {
    echo '$chaine1 a été traité comme true', '<BR>';
} else {
    echo '$chaine1 a été traité comme false', '<BR>';
}

$chaine2 = '0';
if ($chaine2) {
    echo '$chaine2 a été traité comme true', '<BR>';
} else {
    echo '$chaine2 a été traité comme false', '<BR>';
}

$chaine3 = 'test';
if ($chaine3) {
    echo '$chaine3 a été traité comme true', '<BR>';
} else {
    echo '$chaine3 a été traité comme false', '<BR>';
}

$tableau1 = [];
if ($tableau1) {
    echo '$tableau1 a été traité comme true', '<BR>';
} else {
    echo '$tableau1 a été traité comme false', '<BR>';
}

$tableau2 = [5];
if ($tableau2) {
    echo '$tableau2 a été traité comme true', '<BR>';
} else {
    echo '$tableau2 a été traité comme false', '<BR>';
}

$objet1 = null;
if ($objet1) {
    echo '$objet1 a été traité comme true', '<BR>';
} else {
    echo '$objet1 a été traité comme false', '<BR>';
}

$objet2 = new stdClass();
if ($objet2) {
    echo '$objet2 a été traité comme true', '<BR>';
} else {
    echo '$objet2 a été traité comme false', '<BR>';
}

echo '<BR>';

// En Résumé
echo 'Est considéré comme FALSE : ','<BR>';
echo '&nbsp;','- Le boolean false ;-)','<BR>';
echo '&nbsp;',"- L'entier 0",'<BR>';
echo '&nbsp;','- Le réel 0.0','<BR>';
echo '&nbsp;','- La chaîne vide ""','<BR>';
echo '&nbsp;','- La chaîne contenant zéro "0"', '<BR>';
echo '&nbsp;','- Un tableau vide','<BR>';
echo '&nbsp;','- La valeur null','<BR>';