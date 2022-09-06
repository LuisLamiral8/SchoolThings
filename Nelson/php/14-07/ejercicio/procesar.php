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


    if (isset($_POST['comida']) && isset($_POST['cantidad'])) {
        $comida = $_POST['comida'];
        $cantidad = $_POST['cantidad'];
        $dia = date("F j, Y, g:i a");
        $total = 0;
        $precio_mila = 450;
        $precio_miga = 75;
        $precio_satur = 100;
        $precio_pepsi = 60;

        if($comida == "Sandwich de milanesa"){
            $total = $precio_mila * $cantidad;
        }else if($comida == "Sandwich de miga"){
            $total = $precio_miga * $cantidad;
        }else if($comida == "Bizcochito Don Satur"){
            $total = $precio_satur * $cantidad;
        }else if($comida == "Pepsi"){
            $total = $precio_pepsi * $cantidad;
        }else if($comida == "Pepsi Black"){
            $total = $precio_pepsi * $cantidad;
        }
        echo 'Tu pedido fue:'.$cantidad.' '.$comida.'<br/>';
        echo 'Total a pagar: $ '.$total;
        echo '<br/><br/><br/><br/><br/><br/><br/>';
        echo 'Se envió correctamente! en 15 minutos está en tu mesa. <br/>';
        echo '<a href="index.html">Volver al menú principal. <a/>';


        $fp = @fopen('pedidosCantina.txt', "a");
        if(!$fp){
            echo "<h3>No se pudo leer el archivo<h3/>";
            exit;
        }


        $venta = $comida.";".$cantidad.";".$total.";".$dia."\n";

        fwrite($fp, $venta, strlen($venta));
        fclose($fp);

        




    } else {
        echo'<a href="pedido.php">' . 'Complete el formulario' . '</a>';
    }
    ?>    
</body>
</html>
