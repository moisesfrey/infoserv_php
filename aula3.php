<?php

$nota = 7;

switch ($nota) {
    case $nota >= 7;
        echo "Aprovado";
        break;

    case $nota >= 5;
         echo "Recuperação";
         break;

    default:
         echo "Reprovado";
         break;
} 

    
$perfil = "admin";
 if ($perfil == "admin") {
     echo " É Administrador!";    
 }
 elseif ($perfil== "usuario") {
    echo "É usuario comum!";
 }
 else {
    echo "É desconhecido!";
 }
 

 