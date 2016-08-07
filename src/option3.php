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
	echo "Veuillez entrer la clé secrete n\n";
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
	 	//echo("tab : ".$tab[$o]."\n");
	for ($az=$n - 1 ; $az != -1 ; $az--) {
	 		//echo("tbl2 : ". $tri[$az] ."\n");
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
}

decypher();