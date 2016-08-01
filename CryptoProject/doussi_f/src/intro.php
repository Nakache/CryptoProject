<?php
// intro.php for  in /Users/Florian/Desktop/CryptoProject
// 
// Made by DOUSSIN Florian
// Login   <doussi_f@etna-alternance.net>
// 
// Started on  Tue Jul 26 11:31:02 2016 DOUSSIN Florian
// Last update Tue Jul 26 11:31:05 2016 DOUSSIN Florian
//
function pause($seconds)
{
    usleep($seconds * 1000000);
}

function launch()
{
echo "     _________                      _____            \n";
echo "     __  ____/___________  ___________  /______      \n";
echo "     _  /    __  ___/_  / / /__  __ \  __/  __ \     \n";
echo "     / /___  _  /   _  /_/ /__  /_/ / /_ / /_/ /     \n";
echo "     \____/  /_/    _\__, / _  .___/\__/ \____/      \n";
echo "                    /____/  /_/                      \n";
echo "     ________             ________           _____   \n";
echo "     ___  __ \__________________(_)____________  /_  \n";
echo "     __  /_/ /_  ___/  __ \____  /_  _ \  ___/  __/  \n";
echo "     _  ____/_  /   / /_/ /___  / /  __/ /__ / /_    \n";
echo "     /_/     /_/    \____/___  /  \___/\___/ \__/    \n";
echo "                          /___/                      \n";
pause(0.6);
echo "Bien le bonjour chers amis.\n";
pause(0.6);
echo "Appuyez sur 1, 2 ou 3 en fonction de votre choix puis validez en appuyant sur Entrer.\n";
pause(0.6);
echo "Que voulez-vous faire ?\n";
pause(0.6);
echo "1. Génération d'une clé publique\n";
echo "2. Chiffrement d'un message\n";
echo "3. Déchiffrement d'un message\n";
echo "Entrez \"exit\" pour quitter le programme\n";
}
?>