<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Matrices</title>
    </head>
    <body>
        <style>
            h1{
                text-align: center;
            }
        </style>
        <h1>Matrices</h1>
        <?php
        /*
          $numeros = array(1,2,3,4,5);
          print_r ($numeros);

          for($x=0; $x<5; $x++){
          echo "$numeros[$x]<br>";

          }
          $nombres = array("Luis", "Valen", "Francis", "Nico");
          for($x=0; $x<5; $x++){
          echo "$nombres[$x]<br>";

          }
         * 

          $alumno = array("lopez", "nelson", 45, 2356);
          for ($y = 0; $y < 5; $y++) {
          echo "$alumno[$y]<br>";
          }
         * 


          $alumno = array('apellido' => 'lopez', 'nombre' => 'nelson', 'edad' => 48, 'dni' => 4545555);
          foreach ($alumno as $key => $valor) echo "$key: $valor<br>";
         */
        /*
          $matriz = array(
          array(1, 2, 3, 4),
          array(5, 6),
          array(7),
          array(8, 9, 10, 11, 12, 13)
          );
          for ($f = 0; $f < count($matriz); $f++) {

          for ($c = 0; $c < count($matriz[$f]); $c++) {
          echo $matriz[$f][$c] . " ";
          }
          echo "<br/>";
          }
         
        //$alumno = array('apellido' => 'lopez', 'nombre' => 'nelson', 'edad' => 48, 'dni' => 4545555);
        $lista = array(
            'lopez nelson' => array('dni' => 102983213, 'edad' => 4),
            'lamiral luis' => array('dni' => 102983213, 'edad' => 4)
        );
        
          for ($f = 0; $f < count($lista); $f++) {
          foreach ($lista[$f] as $key => $valor)
          echo "$key: $valor <br/>";
          echo "<br/>";
          }
         
        foreach ($lista as $renglon => $fila) {
            echo "$renglon: ";
            foreach ($fila as $clave => $valor) {

                echo" $clave: $valor  <br/> ";
            }
            echo "<br/>";
        }
        /*
         
        




        /* for($f = 0; $f<3; $f++){
          for($e = 0; $e<4; $e++){
          echo $matriz[$f][$e]." ";
          }
          echo "<br>";
          } */
        $lista = array(
            'lopez sir' => array('dni' => 102983213, 'nota' => 4),
            'lamiral luis' => array('dni' => 102983213, 'nota' => 1)
        );
        for ($f = 0; $f < count($lista); $f++) {
          foreach ($lista[$f] as $key => $valor)
          echo "$key: $valor <br/>";
          echo "<br/>";
          }
         
        foreach ($lista as $renglon => $fila) {
            echo "$renglon: ";
            foreach ($fila as $clave => $valor) {
                echo" $clave: $valor  <br/> ";
            }
            echo "<br/>";
        }

        ?>
    </body>
</html>
