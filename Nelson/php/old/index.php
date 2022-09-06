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
        <?php
        //echo "Hola Benito";
        echo "<h1>Cantina del Rubio</h1>";
        echo '<br><br><h2>Ofertas</h2>';
        echo '<h3>Bar del "Rubio"</h3>';
        $nombre="Gaby";
        echo 'El nombre del rubio es: $nombre'.'<br>';
        echo 'El nombre del rubio es: '.$nombre.'<br>';
        echo "El nombre del rubio es: $nombre"."<br>";#Interpolacion
        /*echo <<<_MENSAJE
            <h1>Esto esta en letra cabecera</h1>
            <h2>Esto es cabecera h2</h2>
                        autor:Nelson
        _MENSAJE;*/
        $autor = "nelson";
        $salida=<<<_MENSAJE
                <h2> Ha ocurrido un error </h2>
                <h2> <a href="index.php"> Visite el administrador</a> </h2>
                        autor: $autor
                _MENSAJE;
        echo $salida;
                        
        
        ?>
    </body>
</html>
