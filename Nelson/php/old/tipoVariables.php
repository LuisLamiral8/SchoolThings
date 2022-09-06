<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


$nombreCompleto = 'lopez';
$nombre = 'nombreCompleto';
$$nombre = 'Lopez Nelson';
echo "Nombre completo: $nombreCompleto " . '<br>';


$a=100;

$valor = $a;

echo "Valor $valor a:$a ". "<br>";

$a = &$valor; //Pasaje por referencia

$valor = 133;

echo "valor: $valor a:$a".'<br>';
