<link rel="shortcut icon" href="#" /> <!-- pour éviter le message favicon.ico dans la fenêtre output -->
<?php
//
// IL SUFFIT DE DECOMMENTER LA LIGNE CORRESPONDANT A LA VARIABLE A INSPECTER (une seule ligne ;-)
//$nomVar = "entier";
//$nomVar = "reel";
//$nomVar = "tableau1";
//$nomVar = "tableau2";
//$nomVar = "chaine1";
//$nomVar = 'chaine2';
//$nomVar = "objet";
$nomVar = "fonction";
//$nomVar = "ressource";
//
$entier = 2;
$reel = 3.12;
$tableau1 = array(1, 2, 3, 4, 5, 6);
$tableau2 = [10,20,30,40,50];
$chaine1 = "Ceci est une chaine";
$chaine2 = 'Ceci est une autre chaine';

//////////////////////////////////
$objet = new class{
    public string $unePropriete;
    
    public function __construct() {
        $this->unePropriete = "trop beau";
    }
    
    public function __toString()
    {
        return " avec unePropriete qui vaut : " . $this->unePropriete;
    }
};
///////////////////////////////////
$ressource = tmpfile(); // Crée un fichier temporaire ( https://www.php.net/manual/fr/function.tmpfile.php )

///////////////////////////////////
function maSuperFonctionAuNomUnPeuLong() : string
{
    return "Trop chouette les variables fonctions";
}
// Une variable peut être une fonction :-)
$fonction = 'maSuperFonctionAuNomUnPeuLong';
///////////////////////////////////

// Les variables dynamiques sont pratiques
echo "La variable $", $nomVar, " :", "<BR>";
echo (is_bool($$nomVar)) ? "est un bool" : "n'est pas un bool", "<BR>";
echo (is_int($$nomVar)) ? "est un int" : "n'est pas un int", "<BR>";
echo (is_integer($$nomVar)) ? "est un integer" : "n'est pas un integer", "<BR>";
echo (is_float($$nomVar)) ? "est un float" : "n'est pas un float", "<BR>";
echo (is_double($$nomVar)) ? "est un double" : "n'est pas un double", "<BR>";
echo (is_array($$nomVar)) ? "est un array" : "n'est pas un array", "<BR>";
echo (is_string($$nomVar)) ? "est une chaine" : "n'est pas une chaine", "<BR>";
echo (is_object($$nomVar)) ? "est un object" . $$nomVar  : "n'est pas un object", "<BR>";
echo (is_null($$nomVar)) ? "est null" : "n'est pas null", "<BR>";
echo (is_resource($$nomVar)) ? "est une ressource" : "n'est pas une ressource", "<BR>";
echo (is_callable($$nomVar)) ? "est callable => voici le résultat de son appel : " . $$nomVar() : "n'est pas callable", "<BR>";
echo (is_iterable($$nomVar)) ? "est iterable" : "n'est pas iterable", "<BR>";

echo '<br><a href="http://php.net/manual/fr/language.types.php">Documentation officielle</a>';
fclose($ressource); // il faut fermer le fichier temporaire