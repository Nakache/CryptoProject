<?php
require_once ('./src/resources.php');


function decypher(){
echo "Veuillez entrer le nombre e\n";
fscanf(STDIN, "%s\n", $nbr);
echo "Veuillez entrer votre nombre m\n";
fscanf(STDIN, "%s\n", $mumber);
echo "Quel est le message crypté ?\n";
fscanf(STDIN, "%s\n", $cyphe);
echo "Veuillez entrer la permutaion P\n";
fscanf(STDIN, "%s\n", $permut);
echo "Veuillez entrer la clé secrete S\n";
fscanf(STDIN, "%s\n", $secret);

$p = explode(",", $permut);
$msg = explode(",", $cyphe);
$v = explode(",", $secret);
$e = intval($nbr);
$m = intval($mumber);
$d = inv_modulo($e,$m);
$tab = [];
$tbl2 = [];

for ($i=0; $i != count($msg) ; $i++) { 
	$reslt = my_modulo($msg[$i]*$d, $m);
	array_push ($tab, $reslt);
}
for ($i=1; $i != count($p)+1 ; $i++) {
	for ($k=0; $p[$k] != $i ; $k++) {
	}
	array_push($tbl2, $v[$k]);
//	echo($v[$k]) ."\n";
	// echo "pour l'argument : ".$v[$i]."\n";
	// echo "c'est l'argument : ".$p[$i]."\n";
}
var_dump($tbl2);
}

decypher();