<link rel="shortcut icon" href="#" /> <!-- pour éviter le message favicon.ico dans la fenêtre output -->
<?php
const AVOGADRO = "6.02214086e23";
echo AVOGADRO, "<BR>";
echo "Une liste des constantes prédefinies", "<BR>";
print_r (get_defined_constants(true)); // print_r est une commande plus verbeuse que echo !