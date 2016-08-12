<?php
// option3.php for  in /Users/Florian/Desktop/CryptoProject/src
// 
// Made by DOUSSIN Florian
// Login   <doussi_f@etna-alternance.net>
// 
// Started on  Fri Aug 12 16:42:27 2016 DOUSSIN Florian
// Last update Fri Aug 12 16:42:34 2016 DOUSSIN Florian
//
require_once ('resources.php');
require_once ('menu.php');

function decypher() {
	echo "Vous avez choisi l'option Déchiffrement d'un message\n\n";
	echo "Veuillez entrer le nombre e\n";
	fscanf(STDIN, "%s\n", $nbr);
	echo "Veuillez entrer votre nombre m\n";
	fscanf(STDIN, "%s\n", $mumber);
	echo "Quel est le message crypté ?\n";
	fscanf(STDIN, "%s\n", $cyphe);
	echo "Veuillez entrer la permutation P\n";
	fscanf(STDIN, "%s\n", $permut);
	echo "Veuillez entrer la clé secrète S\n";
	fscanf(STDIN, "%s\n", $secret);
	echo "Veuillez entrer la clé secrète n\n";
	fscanf(STDIN, "%s\n", $ainne);
	$p = explode(",", $permut);
	$msg = explode(",", $cyphe);
	$v = explode(",", $secret);
	$e = intval($nbr);
	$m = intval($mumber);
	$n = intval($ainne);
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
		intval($v[$k]);
		array_push($tbl2, $v[$k]);
	}
	$tri = [];
	for ($y=0; $y != $n +1 ; $y++) { 
		for ($pu=0; $pu != count($p) ; $pu++) {
			if ($p[$pu] == $y) {
		array_push($tri, $v[$pu]); //$tri = S'
	}
}
}


$tri2 = $tri;
sort($tri2); //tri 2 = S' trier

$rslt = [];

for ($o=0; $o != count($tab) ; $o++) {
	for ($az=$n - 1 ; $az != -1 ; $az--) {
		if ($tab[$o] >= $tri2[$az]) {
			$tab[$o] -= $tri2[$az];
			$rslt[$o] .= "1";
		} else{
			$rslt[$o] .= "0";
		}
	}
}


for ($i=0; $i != $o ; $i++) { // parcourir $rslt
	 for ($j=count($tri) - 1; $j != -1 ; $j--) { //parcourir $tri à l'envers
	 	for ($k=count($tri2) - 1; $k != -1 ; $k--) { //parcourir $tri2
	 		if ($tri[$j] == $tri2[$k]) { // si les 2 valeurs son =
	 			$mpns .= $rslt[$i][5 - $k];
	 		}
	 	}
	 }
	}

	$deux = my_modulo(strlen($mpns),8);
	$mpns = substr($mpns, 0, -$deux);

	$exp = str_split($mpns, 8);
	for ($g=0; $g != count($exp) ; $g++) { 
		echo(chr(bindec($exp[$g])));
	}
	echo("\n");
	affchoice();
}