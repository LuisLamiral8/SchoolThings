<?php
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$date = $_POST["date"];

require_once './login.php';
$con = new mysqli($host, $user, $pass, $db);
if ($con->connect_error) {
    die("Error de conexion");
}
echo "Conexion exitosa";
$mysql = "INSERT INTO profesores VALUES(NULL, '".$name."', '".$lastname."', '".$date."')";
$resultado = $con->query($mysql);
if (!$resultado) {
    die("Error de insercion");
}
echo "<br>Fila insertada";
?>





?>