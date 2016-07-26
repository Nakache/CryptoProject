#!/usr/bin/env php
<?php
// index.php for  in /Users/Florian/Desktop/CryptoProject
// 
// Made by DOUSSIN Florian
// Login   <doussi_f@etna-alternance.net>
// 
// Started on  Tue Jul 26 10:37:02 2016 DOUSSIN Florian
// Last update Tue Jul 26 10:37:30 2016 DOUSSIN Florian
//
require_once('./assets/intro.php');
$line = "";
while (trim($line) != "exit")
  {
    echo "$> ";
    $file = fopen("php://stdin", "r");
    $line = fgets($file);
    $params = split(" ", trim($line));
    
    if ($params[0] == "1")
      echo "echo\n";
    
    else if ($params[0] == "2")
      echo "cat\n";
    
    else if ($params[0] == "3")
      echo "pwd\n";
    
    else
      if ($params[0] !== "exit")
        echo "veuillez entrer un cat ou echo ou exit ou pwd\n";
  }
?>