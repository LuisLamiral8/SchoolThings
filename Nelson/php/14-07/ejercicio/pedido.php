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
            font-family: sans-serif;
        }
        body{
            background-color: gray;
        }
        h1, h3, table, tr, td{
            text-align: center;
            margin: 0 auto;
            width: 100;
        }
        table{
            margin-top: 100px;
        }
        tr, td{
            width: 200px;
            height: 50px;
            /* background-colosr: red; */
        }
        a{
            margin-top: 25px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            text-decoration: none;
            transition: all 250ms;
        }
        a:hover{
            color: red;
        }
        form{
            margin: 15px 0;
        }
    </style>
     <form method="Post" action="procesar.php">
        <select name="comida" >   
            <option>Qué vas a pedir?</option>
            <option>Sandwich de milanesa</option>
            <option>Sandwich de miga</option>
            <option>Bizcochito Don Satur</option>
            <option>Pepsi</option>
            <option>Pepsi Black</option>

        </select>
        <input name="cantidad" type="number" placeholder="Cuántos querés?">
        <input type="submit" value="Enviar pedido" />
    </form>
    <table>
        <tr>
            <td>Producto</td>
            <td>Cantidad</td>
            <td>Precio</td>
        </tr>
        <tr>
            <td>Sandwich de milanesa</td>
            <td>1</td>
            <td>450</td>
        </tr>
        <tr>
            <td>Sandwich de miga</td>
            <td>1</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Bizcochitos Don Satur</td>
            <td>1</td>
            <td>100</td>
        </tr>
        <tr>
            <td>Pepsi</td>
            <td>1</td>
            <td>60</td>
        </tr>
        <tr>
            <td>Pepsi Black</td>
            <td>1</td>
            <td>60</td>
        </tr>
    </table>
   
    <a href="index.html">Volver al menú principal</a>
</body>

</html>