<link rel="shortcut icon" href="#" /> <!-- pour éviter le message favicon.ico dans la fenêtre output -->
<?php

$entier = 2;
$reel = 3.12;
$tableau1 = array(1, 2, 3, 4, 5, 6);
$tableau2 = [10,20,30,40,50];
$chaine1 = "Ceci est une chaine";
$chaine2 = 'Ceci est une autre chaine';

//////////////////////////////////
$objet = new class {
    private string $unePropriete;
    
    public function __construct() {
        $this->unePropriete = "DeVille";
    }
    
    public function __toString()
    {
        return "Je suis un objet avec unePropriete qui vaut : " . $this->unePropriete;
    }
};
///////////////////////////////////
$ressource = tmpfile(); //Ouverture d'un fichier
///////////////////////////////////

function maFonction() {
    echo "Youppee ";
}
$fonction = 'maFonction';
///////////////////////////////////

echo 'la fonction gettype($uneVariable); permet de connaître le type d\'une variable <BR>';
echo 'gettype($entier) : ', gettype($entier),"<BR>";
echo 'gettype($reel) : ', gettype($reel),"<BR>";
echo 'gettype($tableau1) : ', gettype($tableau1),"<BR>";
echo 'gettype($tableau2) : ', gettype($tableau2),"<BR>";
echo 'gettype($chaine1) : ', gettype($chaine1),"<BR>";
echo 'gettype($chaine2) : ', gettype($chaine2),"<BR>";
echo 'gettype($objet) : ', gettype($objet),"<BR>";
echo 'gettype($ressource) : ', gettype($ressource),"<BR>";
echo 'gettype($fonction) : ', gettype($fonction), ' ah bon ', $fonction(), "<BR><BR>";

// Caster commen en java ;-)
$chaine = (string) $entier;
echo $chaine, " ", gettype($chaine), "<BR>";
$chaine = (string) $reel;
echo $chaine, " ", gettype($chaine), "<BR>";
$chaine = "26";
$entier = (int) $chaine;
echo $entier, " ", gettype($entier), "<BR>";
$chaine = "634";
$entier = (integer) $chaine;
echo $entier, " ", gettype($entier), "<BR>";
$chaine = "3.1415";
$reel = (double) $chaine;
echo $reel, " ", gettype($reel), "<BR>";
$chaine = "56.5e5";
$reel = (float) $chaine;  // ;-) php...
echo $reel, " ", gettype($reel), "<BR>";

// settype() pour changer le type d'une variable
echo '<br>', 'settype($uneVariable, "nouveauType") permet de changer le type d\'une variable', '<BR>';
$uneVariable = 654.656;
echo "La variable \$uneVariable vaut : ", $uneVariable, "<BR>";
echo "Le type de la variable \$uneVariable est : ",gettype($uneVariable), "<BR>";
settype($uneVariable, "string");
echo "Le nouveau type de la variable \$uneVariable est : ",gettype($uneVariable), "<BR>";
settype($uneVariable, "int");
echo "Le nouveau type de la variable \$uneVariable est : ",gettype($uneVariable), "<BR>";
echo "La variable \$uneVariable vaut : ", $uneVariable, "<BR>";
settype($uneVariable, "float");
echo "Le nouveau type de la variable \$uneVariable est : ",gettype($uneVariable), "<BR>";
echo "La variable \$uneVariable vaut : ", $uneVariable, "<BR>";

// et encore les fonctions ...val()
echo '<br>', 'ou encore avec les fonctions ...val (intval(), doubleval(), strval()...)', '<BR>';
$chaine = "12";
$entier = intval($chaine);
echo gettype($entier),"<BR>";
$reel = floatval($chaine);
echo gettype($reel),"<BR>";
$reel = doubleval($chaine);
echo gettype($reel),"<BR>";
$booleen = boolval($chaine);
echo gettype($booleen),"<BR>";
echo gettype($chaine),"<BR>";
$chaine = strval(123.456);
echo gettype($chaine),"<BR>";

fclose($ressource); // il faut fermer le fichier temporaire