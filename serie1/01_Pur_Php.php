<link rel="shortcut icon" href="#" /> <!-- pour éviter le message favicon.ico dans la fenêtre output -->
<?php   // La balise à connaître ! Attention pas d'espace entre ? et php
    echo "juste du pur PHP";
    echo "<br>"; // un passage à la ligne
    echo "echo phpversion(); permet de connaître la version courante de php","<BR>";
    echo phpversion();
    echo "<br>";
    echo "phpinfo(); appelle une fonction qui affiche pleins d'infos utiles à propos de l'installation de PHP";
    phpinfo();
?>