<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <style>
            input{
                margin: 5px;
                padding: 5px 25px;
                text-align: center;
            }
        </style>
        <h1>asdas</h1>
        <form  action="procesarInputs.php" method="POST">

            <input type="text" name="name" placeholder="Nombre"> <br>
            <input type="text" name="lastname" placeholder="Apellido"> <br>
            <input type="date" name="date" placeholder="fecha"> <br>
            <br><br>
            <input type="submit" name="Agregar" value="Agregar">
            <input type="reset" value="Borrar">

        </form>
    </body>