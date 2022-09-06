<?php

include("funciones.php");
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['op'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];
    
    if($op=='S'){
        $operacion1 = sumar($num1, $num2);
        echo $operacion1 ;
    }else if($op=='R'){
            $operacion2 = restar($num1, $num2);
        echo $operacion2;
    }else if($op=="M"){
        $operacion3 = multi($num1, $num2);
        echo $operacion3;
    }else if($op=="D"){
        $operacion4 = divi($num1, $num2);
        echo $operacion4;
    }   
    
} else {
    echo'<a href="ingresar.html">' . 'Complete el formulario' . '</a>';
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

