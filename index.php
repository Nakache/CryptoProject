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
  echo "> ";
  $file = fopen("php://stdin", "r");
  $line = fgets($file);
  $params = split(" ", trim($line));

  if ($params[0] == "1")
    echo "vous avez choisi l'option Génération d'une clé publique\n";

  else if ($params[0] == "2")
    echo "Vous avez choisi l'option Chiffrement d'un message\n";

  else if ($params[0] == "3")
    echo "Vous avez choisi l'option Déchiffrement d'un message\n";

  else
    if ($params[0] !== "exit"){
      echo "Que voulez-vous faire ?";
      echo "1. Génération d'une clé publique\n";
      echo "2. Chiffrement d'un message\n";
      echo "3. Déchiffrement d'un message\n";
      echo "Entrez \"exit\" pour quitter le programme\n";
    }
    if ($params[0] == "exit"){
      echo "À bientôt !\n";
    }
  }
  ?>