<?php
$milanesa= $_POST['milanesa'];
$coca= $_POST['coca'];
$galletita= $_POST['galletita'];

define("PRECIO_MILA", 200);
define("PRECIO_COCA", 150);
define("PRECIO_GALLE", 120);

$precioMila= PRECIO_MILA*$milanesa;
$precioCoca= PRECIO_COCA*$coca;
$precioGalle= PRECIO_GALLE*$galletita;
$total=$precioMila+$precioCoca+$precioGalle;
        

echo'<h1> cantina "El Rubio" by Gaby </h1>';
echo"<h1> Pedido recibido </h1>";
echo"usted pidio: "."<br>";
echo"Cantidad milanesa: $milanesa, Precio: $precioMila".'<br>';
echo"Cantidad coca: $coca,  Precio: $precioCoca".'<br>';
echo"Cantidad galletita: $galletita, Precio: $precioGalle".'<br>';
echo"<h3> gracias por su compra</h3>";

echo"Total a pagar: $total";

?>