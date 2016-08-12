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

function check_prems($e, $m)
{
  if (my_modulo($e, $m) == "1"){
    return 1;
  }
  else {
    return 0;
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

function check_suite($cut) {
  $temp = 0;

  if (count($cut) <= 1) {
    echo "La suite que vous avez entrée n'est pas super-croissante.\n";
    return 0;
  }
  else {
    for ($i=0; $i != count($cut); $i++) { 
      if ($temp < $cut[$i]) {
        $temp = $temp + $cut[$i];
      }
      else {
        echo "La suite que vous avez entrée n'est pas super-croissante.\n\n";
        return 0;
      }
    }
  }
  return 1;
}