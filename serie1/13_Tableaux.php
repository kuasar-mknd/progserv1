<link rel="shortcut icon" href="#" /> <!-- pour éviter le message favicon.ico dans la fenêtre output -->
<?php
echo "Pour créer un tableau en PHP il existe deux syntaxe : ", "<BR>";
echo " 1.) \$tab = array(elem1, elem2, elem3, etc...);", "<BR>";
echo " 2.) \$tab = [elem1, elem2, elem3, etc...];", "<BR>";
echo " Pour afficher le contenu complet d'un tableau on utilise la fonction var_dump(tab) : ", "<BR>";
$tableau1 = array(100, 200, 300, 400);
echo "\$tableau1 : ", var_dump($tableau1), "<BR>";
$tableau1Bis = [100,200,300,400];
echo "\$tableau1Bis : ", var_dump($tableau1Bis), "<BR><BR>";

echo "Les tableaux n'ont pas de taille fixe en PHP","<BR>";
echo "\$tableau1 : ", var_dump($tableau1), "<BR>";
$tableau1[4] = 500;
echo "\$tableau1 : ", var_dump($tableau1), "<BR><BR>";

echo "Les tableaux ne sont pas typés","<BR>";
$tableau1[0] = false;
$tableau1[1] = 2;
$tableau1[2] = "Chaine";
$tableau1[3] = 3.1415;
echo "\$tableau1 : ", var_dump($tableau1), "<BR><BR>";

echo "Les index ne sont pas obligatoires ! => mis à la suite","<BR>";
$tableau1[] = "Trop bien";
echo "\$tableau1 : ", var_dump($tableau1), "<BR><BR>";

echo "Contrairement à java, quand on 'copie' un tableau, on ne copie pas la référence mais son contenu !","<BR>";
$tableau2 = $tableau1;
$tableau2[0] = 666;
echo "\$tableau1 : ", var_dump($tableau1), "<BR>";
echo "\$tableau2 : ", var_dump($tableau2), "<BR><BR>";

echo "Nouveauté en PHP : Les tableaux associatifs (c.f. Map en java)","<BR>";
// Chaque entrée dans le tableau correspond à une paire (clé => valeur)
$tabPersonne = array(
    "prenom" => "Roger",
    "nom" =>    "Moore",
    "no" => 7
);
echo "\$tabPersonne : ", var_dump($tabPersonne), "<BR>";
echo $tabPersonne["prenom"], "<BR>";
echo $tabPersonne["nom"], "<BR>";
echo $tabPersonne["no"], "<BR>";
$tabPersonne["chef"] = "M";
$tabPersonne[1] = "Spy"; // Remarque : Si on utilise un index, c'est comme si c'était une clé ! (non pas la première paire du tableau)
echo "\$tabPersonne : ", var_dump($tabPersonne), "<BR><BR>";

echo "Les tableaux multidimensionnel existent en PHP","<BR>";
/*
 * Soit la matrice suivante :
 *         /  10      20 \
 *         |   1       2 |
 *         \ 100     200 /
 */
$matrice[0][0] = 10;
$matrice[0][1] = 20;
$matrice[1][0] = 1;
$matrice[1][1] = 2;
$matrice[2][0] = 100;
$matrice[2][1] = 200;
echo "\$matrice : ", print_r($matrice), "<BR><BR>";

echo "On peut mixer le tout (tab indexés, tab associatifs, multidimensions)","<BR>";
$artistes = array(
    array(
        "nom" => "Amy",
        "prenom" => "Winehouse",
        "dateNaissance" => new DateTime('14-09-1983')
    ),
    array(
        "nom" => "Janis",
        "prenom" => "Joplin",
        "dateNaissance" => new DateTime('19-01-1943')
    ),
    array(
        "nom" => "Jo",
        "prenom" => "Bar",
        "dateNaissance" => new DateTime('19-01-1943')
    ),
    array(
        "nom" => "Janis",
        "prenom" => "Siegel",
        "dateNaissance" => new DateTime('12-01-1990')
    )
);
echo "\$artistes[1][\"prenom\"] : ", var_dump($artistes[1]["prenom"]), "<BR><BR>";
echo "il y a ", count($artistes), " artistes","<BR>";
echo "il y a ", count($artistes[0]), " champs par artiste","<BR>";
echo var_dump(array_keys($artistes[0])),"<BR>";

echo $artistes[0]["dateNaissance"]->format("D-M-Y"),"<BR>";
echo $artistes[0]["dateNaissance"]->format("d-m-y"),"<BR><BR>"; //https://www.w3schools.com/php/func_date_date_format.asp

echo "On peut trier les tableaux multidimensionnel selon plusieurs critères","<BR>"; // http://php.net/manual/en/function.array-multisort.php 
$dates = array_column($artistes, "dateNaissance");
$noms  = array_column($artistes, "nom");
array_multisort($noms, SORT_DESC, $dates, SORT_ASC, $artistes);
echo "<pre>";
print_r($artistes);
echo "</pre>";