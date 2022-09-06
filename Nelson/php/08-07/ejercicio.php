<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08-07 Ejercicio</title>
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
               $mostrar= tabla(4, 3);
               echo $mostrar;
               
            function tabla($filas, $columnas) {
                $texto = "";
                $texto .= "<table border=1px>";
                for ($f = 0; $f < $filas; $f++) {
                    $texto .= "<tr>";
                    for ($c = 0; $c < $columnas; $c++) {
                        $texto .= "<td>$c</td>";
                    }
                    $texto .= "</tr>";
                }
                $texto .= "</table>";
                return $texto;
            }
            /*
            html en excel con tablas
            */
            ?>
</body>
</html>