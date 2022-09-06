<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fp = @fopen('pedidosCantina.txt', "a");
        if(!$fp){
            echo "<h3>No se pudo leer el archivo<h3/>";
            exit;
        }
        $producto = "milanesa";
        $cantidad = 2;
        $precio = 200;
        $venta = $producto.";".$cantidad.";".$precio."\n";
        fwrite($fp, $venta, strlen($venta));
        fclose($fp);

        $matriz = file('pedidosCantina.txt');
        $texto = "";

        $texto .= '<table>';
        for ($f = 0; $f <count($matriz); $f++){
            $datos = explode(';', $matriz[$f]);
            $texto .='<tr>';
            for ($c = 0; $c < count ($datos) ; $c++){
                $texto .= '<td>'.$datos[$c]. '</td>';
            }
            $texto.='</tr>';
        }
        $texto .= '<table/>';

        echo $texto;
    ?>
</body>
</html>