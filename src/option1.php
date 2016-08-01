<?php
// option1.php for  in /Users/Florian/Desktop/CryptoProject/assets
// 
// Made by DOUSSIN Florian
// Login   <doussi_f@etna-alternance.net>
// 
// Started on  Thu Jul 28 10:52:18 2016 DOUSSIN Florian
// Last update Thu Jul 28 10:52:20 2016 DOUSSIN Florian
//

echo "Pour générer une clé publique, il vous faut rentrer une suite super croissante\n";
echo "Entrez votre suite :\n";

$stdin = fopen("php://stdin", "r");
fscanf(STDIN, "%s\n", $entry);
echo "CA ME RENVOIE CE QUE JE RENTRE " . $entry . "\n";

$cut = explode(",", $entry);
echo "ET LA LE 1ER ARGUMENT DU TAB " . $cut[0] . "\n";
echo "ET LA LE 4E " . $cut[3];
?>