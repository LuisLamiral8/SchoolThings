<?php
$milanesa=$_POST['milanesa'];
$coca=$_POST['coca'];
$galletita=$_POST['galletita'];

define("PRECIO_MILA", 200);
define("PRECIO_COCA", 150);
define("PRECIO_GALLE", 100);

$precioMila= PRECIO_MILA * $milanesa;
$precioCoca= PRECIO_COCA * $coca;
$precioGalle= PRECIO_GALLE * $galletita;

echo "<h1>Cantina del Rubio</h1>";
        echo '<br><br><h2>Ofertas</h2>';
        echo '<h3>Pedido recibido</h3>';
                
        echo "Usted pidio"."<br>";
        echo "Milanesa cantidad: $milanesa, Precio: $precioMila".'<br>';
        echo "Coca canidad: $coca,  Precio: $precioCoca"."<br>";
        echo "Galle cantidad: $galletita, Precio: $precioGalle"."<br>";
        echo "<h3>Gracias por su compra</h3>";
?>

