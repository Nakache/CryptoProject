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

function get_str() {
	$stdin = fopen("php://stdin", "r");
	fscanf(STDIN, "%s\n", $entry);
	echo "CA ME RENVOIE CE QUE JE RENTRE " . $entry . "\n";

	$cut = explode(",", $entry);
	echo "ET LA LE 1ER ARGUMENT DU TAB " . $cut[0] . "\n";
	echo "ET LA LE 4E " . $cut[3] . "\n";

	check_suite($cut);
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
	// print_r($tbl_non_trier);
	// print_r($d);
	// print_r($tbl_trier);
	echo "P : ".substr($p, 0, -1)."\n";
	echo "Clé publique : ".substr($t, 0, -1)."\n";
}

get_str();
// $S = [1,2,5,10,20,50,100,200];
// public_key($S, 255, 512);
?>