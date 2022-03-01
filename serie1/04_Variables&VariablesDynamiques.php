<link rel="shortcut icon" href="#" /> <!-- pour éviter le message favicon.ico dans la fenêtre output -->
<?php 
    // REMARQUE IMPORTANTE : pas de types en php.
    echo "PHP n'est pas un langage typé ! <BR>";
    
    // Une variable commence toujours par $
    echo "Une variable commence toujours par $ <BR>";
    $unEntier = 2;
    $unReel = 3.1415;
    $uneChaineDeCaractere = "PHP 7";
    $unBoolean = true;
    echo $unEntier;
    echo "<BR>";
    echo $unReel;
    echo "<BR>";
    echo $uneChaineDeCaractere;
    echo "<BR>";
    
    // Afficher un boolean n'affiche pas true ou false mais 1 ou rien !
    echo "Les booléens ne fonctionnent pas comme en java. <BR>";
    echo $unBoolean;    // remarque : n'affiche pas true. Affiche 1 !
    echo "<BR>";
    $unBoolean = false;
    echo $unBoolean;    // remarque : n'affiche pas 0 !!!! Affiche RIEN !!!!
    echo "<BR>";
    
    // PHP (comme java) est sensible à la casse (majuscule, minuscule) !
    echo 'PHP est sensible à la casse. $unentier et $unEntier sont deux variables différentes !<BR>';
    $unentier = 3;
    echo "unEntier : ", $unEntier;
    echo "<BR>";
    echo "unentier : ", $unentier;
    echo "<BR>";
    
    // Comme PHP n'est pas typé, on peut mélanger les types dans une variable
    $uneVariableMultiType = true;
    echo "Une même variable peut stocker des informations de types différents <BR>";
    echo '$uneVariableMultiType : ', $uneVariableMultiType, "<BR>";
    $uneVariableMultiType = 2;
    echo '$uneVariableMultiType : ', $uneVariableMultiType, "<BR>";
    $uneVariableMultiType = 3.1415;
    echo '$uneVariableMultiType : ', $uneVariableMultiType, "<BR>";
    $uneVariableMultiType = "Je ne sais pas si c'est bien !";
    echo '$uneVariableMultiType : ', $uneVariableMultiType, "<BR>";
    
    // PHP permet d'avoir des variables dynamiques
    // On peut construire le nom de la variable :-)
    // Une variable dynamique se reconnaît au double dollar ($$nomVariableDynamique)
    echo "Nouveauté par rapport à java, PHP permet d'avoir des variables dynamiques<BR>";
    echo "\$produit_1 = \"Rivella\";", "<BR>";
    echo "\$produit_2 = \"Sinalco\";", "<BR>";
    echo "\$no = 1;", "<BR>";
    echo "\$nom = \"produit_\" . \$no;", "   // => produit_1",  "<BR>";
    echo "echo \$\$nom;", "          // correspond à echo \$produit_1 => Affichera Rivella", "<BR>";
    echo "\$no = 2;", "<BR>";
    echo "\$nom = \"produit_\" . \$no;", "<BR>";
    echo "echo \$\$nom;", "          // Affichera Rivella", "<BR>";
    $produit_1 = "Rivella";
    $produit_2 = "Sinalco";
    $no = 1;
    $nom = "produit_" . $no;
    echo $$nom, "<BR>";
    $no = 2;
    $nom = "produit_" . $no;
    echo $$nom, "<BR>";
    $i = 1;
    ${"var".$i}=5; // construction du nom la variable $var1 dynamiquement
    $i++;
    ${"var".$i}=9; // construction du nom la varaible $var2 dynamiquement
    echo "\$var1 = $var1","<BR>";
    echo "\$var2 = $var2","<BR>";
    echo '<a href="http://php.net/manual/fr/language.variables.basics.php">Documentation officielle</a>';