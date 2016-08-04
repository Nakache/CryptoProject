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

function inv_modulo($a, $n)
{
  if(is_int($a) && is_int($n) && $n != 0){
  	for($u = 0; $u <= $n; $u++){
  		$multipl = $a * $u;
  		if(my_modulo($multipl, $n) == 1){
  			return $u;
  		}
  	}
  	echo "va t'acheter des doigts !\n";
  	return 0;
  }
  echo "va t'acheter des doigts !\n";
    return 0;
}