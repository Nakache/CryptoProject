<?php


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

 function chiffrage(){

$stdin = fopen("php://stdin", "r");
echo "Veuillez entrer votre texte à crypter\n";
fscanf(STDIN, "%s\n", $entry);
echo "Veuillez entrer le nombre n\n";
fscanf(STDIN, "%s\n", $n);

  for ($i=0; $entry[$i] != "" ; $i++) {
  	$temp = ord($entry[$i]);
  	$temp2 = decbin($temp);
  	$bin = sprintf( "%08d", $temp2);
  	$line = $line.$bin;
  }
$rest = my_modulo(intval(strlen($line)), intval($n));
for ($rest; $rest != $n ; $rest++) {
	$line = $line."0";
	}
	$split = str_split($line, $n);
	var_dump($split);
	cypher($split);
}

function cypher($split){
	for ($i=0; $split[$i] ; $i++) { 
		echo($split[$i]);
	}
}

chiffrage();