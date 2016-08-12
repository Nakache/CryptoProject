<?php
// index.php for  in /Users/Florian/Desktop/CryptoProject
// 
// Made by DOUSSIN Florian
// Login   <doussi_f@etna-alternance.net>
// 
// Started on  Tue Jul 26 10:37:02 2016 DOUSSIN Florian
// Last update Tue Jul 26 14:30:24 2016 DOUSSIN Florian
//
require_once('intro.php');
require_once('option1.php');
require_once('option2.php');
require_once('option3.php');
launch();

function affchoice()
{
      echo "Que voulez-vous faire ?\n";
      echo "1. Génération d'une clé publique\n";
      echo "2. Chiffrement d'un message\n";
      echo "3. Déchiffrement d'un message\n";
      echo "Entrez \"exit\" pour quitter le programme\n";
      choice();
}

function choice()
{
    fscanf(STDIN, "%s\n", $entree);
    echo "> ";
    if ($entree == "1") {
      public_key();
    }
    else if ($entree == "2") {
      chiffrage();
    }
    else if ($entree == "3") {
      decypher();
    }
    else
      if ($entree !== "exit"){
      echo "Que voulez-vous faire ?\n";
      echo "1. Génération d'une clé publique\n";
      echo "2. Chiffrement d'un message\n";
      echo "3. Déchiffrement d'un message\n";
      echo "Entrez \"exit\" pour quitter le programme\n";
      choice();
      }
    if ($entree == "exit"){
      echo "À bientôt !\n";
    }
}
?>