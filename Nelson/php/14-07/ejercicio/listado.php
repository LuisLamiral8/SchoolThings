<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-color: gray;
        }
        table{
            text-align: center;
            margin:  auto;
            margin-top: 200px;
        }
        td, tr{
            text-align: center;
            border-radius: 10px;
            background-color: white;
            width: 200px;
            height: 40px;
        }
        </style>
<?php
            $matriz = file('pedidosCantina.txt');
            $texto = "";

            $texto .= '<table> <tr> <td>Precio</td> <td>Cantidad</td> <td>Total</td> <td>Hora del pedido</td>';
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