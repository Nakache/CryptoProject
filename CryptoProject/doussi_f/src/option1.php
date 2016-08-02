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

function get_str() {
$stdin = fopen("php://stdin", "r");
fscanf(STDIN, "%s\n", $entry);
echo "CA ME RENVOIE CE QUE JE RENTRE " . $entry . "\n";

$cut = explode(",", $entry);
echo "ET LA LE 1ER ARGUMENT DU TAB " . $cut[0] . "\n";
echo "ET LA LE 4E " . $cut[3] . "\n";
}

function check_suite() {
  get_str();
  
}

function my_modulo($int, $n)
{
  if(is_int($int) && is_int($n) && is_numeric($int) && $n != 0){
    $result = $int - (floor($int/$n)*$n);
    return ($result);
  }
  else {
    echo "va t'acheter des doigts !\n";
    return ($int);
  }
}

function public_key($s,$e,$m){
 $a=[];
 if(true){
 	for ($i=0; $i != count($s); $i++) {
 		//echo("Le tableau est égale à: ".$s[$i]."\n");
 		$b = $s[$i]*$e;
 		//echo("Le calcul est égale à: ".$b."\n");
 		$c = my_modulo($b,$m);
 		//echo("so  modulo est égale à: ".$c."\n");
 		array_push($a, $c);
 		sort($a);
 			}
 		}
	foreach ($a as $value) {
    $p = $p.$value.",";
}
echo substr($p, 0, -1)."\n";
}

check_suite();
$S = [1,2,5,10,20,50,100,200];
public_key($S, 255, 512);
?>