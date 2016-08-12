<?php
// option1.php for  in /Users/Florian/Desktop/CryptoProject/assets
// 
// Made by DOUSSIN Florian
// Login   <doussi_f@etna-alternance.net>
// 
// Started on  Thu Jul 28 10:52:18 2016 DOUSSIN Florian
// Last update Sun Aug  7 21:15:55 2016 Nakache Thomas
//

//Vérifie si c'est une suite croissante
require_once ('resources.php');
//Transformation en clé publique
function public_key(){
	echo "Vous avez choisi l'option génération d'une clé publique\n\n";
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
	if(check_suite($s)){
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
	echo "Clé publique : ".substr($t, 0, -1)."\n\n";
	affchoice();
}
?>