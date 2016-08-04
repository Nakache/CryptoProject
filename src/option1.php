<?php
// option1.php for  in /Users/Florian/Desktop/CryptoProject/assets
// 
// Made by DOUSSIN Florian
// Login   <doussi_f@etna-alternance.net>
// 
// Started on  Thu Jul 28 10:52:18 2016 DOUSSIN Florian
// Last update Thu Jul 28 10:52:20 2016 DOUSSIN Florian
//

// echo "Pour générer une clé publique, il vous faut rentrer une suite super croissante\n";
// echo "Entrez votre suite :\n";

//Vérifie si c'est une suite croissante
require_once ('./src/resources.php');

function check_suite($cut) {
	$temp = 0;
	for ($i=0; $i != count($cut); $i++) { 
		if ($temp < $cut[$i]) {
			$temp = $temp + $cut[$i];
		}
		else {
			return 0;
		}
	}
	return 1;
}

//Transformation en clé publique
function public_key(){
echo "Veuillez entrer une suite super croissante\n";
fscanf(STDIN, "%s\n", $suite);
echo "Veuillez entrer le nombre e\n";
fscanf(STDIN, "%s\n", $nbr);
echo "Veuillez entrer votre nombre m\n";
fscanf(STDIN, "%s\n", $mumber);

	$s = explode(",", $suite);
	$e = intval($nbr);
	$m = intval($mumber);
	$tbl_trier=[];
	$tbl_non_trier=[];
	$d=[];
	if(true){
		for ($i=0; $i != count($s); $i++) {
			$b = $s[$i]*$e;
			$c = my_modulo($b,$m);
			array_push($tbl_trier, $c);
			array_push($tbl_non_trier, $c);
		}
		sort($tbl_trier);
	}
	for ($j=0; $tbl_non_trier[$j] ; $j++) { 	
		for ($q=0; $tbl_trier[$q]; $q++) { 
			if ($tbl_non_trier[$j] == $tbl_trier[$q]) {
				$v = $q+1;
				array_push($d, $v);
			}
		}
	}
	for ($i=0; $tbl_trier[$i]; $i++) { 
		$t = $t.$tbl_trier[$i].",";
	}

	for ($i=0; $d[$i]; $i++) { 
		$p = $p.$d[$i].",";
	}
	echo "P : ".substr($p, 0, -1)."\n";
	echo "Clé publique : ".substr($t, 0, -1)."\n";
}
?>