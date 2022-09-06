<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Archivos</title>
    </head>
    <body>
        <style>
            h1{
                text-align: center;
            }
        </style>
        <h1>
            Archivos
        </h1>




        <?php
        // readfile("info.txt");

            $texto = file_get_contents("info.txt");
            // echo $texto;

            // $fp = fopen("info.txt", 'r');
            // fpassthru($fp);
            
            
            // $fp = @fopen("asdinfo.txt", 'r');
            // if(!$fp){
            //     echo "El archivo no se abre";
            //     exit;
            // }
            
            // $matriz= file('excel.csv');
            // for($f = 0; $f<count($matriz); $f++) echo $matriz[$f].'<br>';
            
            // for($f = 0; $f<count($matriz); $f++){
                //    $datos = explode(';', $matriz[$f]);
                //    for($c = 0; $c<count($datos); $c++) echo $datos[$c].'<br>';
                //    echo "<br>";
                // }
                
                
            // $fp = @fopen('excel.csv', 'r');
            // while(!feof($fp)){
                //     $linea = fgets($fp);
                //     echo $linea.'<br>';
                // }
                
                
            $fp = @fopen('excel.csv', 'r');
            $count = 0;
            while(!feof($fp)){
                $letra = fgetc($fp);
                if($letra==";"){
                    $count++;
                }
                echo $letra;
            }
            echo '<br><br>Cantidad de ; = '.$count;
        
        
        
        
        ?>
    </body>
</html>
