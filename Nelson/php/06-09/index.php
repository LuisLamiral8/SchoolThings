<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './login.php';
        $con = new mysqli($host, $user, $pass, $db);
        if ($con->connect_error) {
            die("Error de conexion");
        }
        echo "Conexion exitosa";
        $mysql = "INSERT INTO `profesores` (`idProfesor`, `nombre`, `apellido`, `fechaNacimiento`) VALUES (NULL, 'nelson', 'lopez', '09-05-5555')";
        $resultado = $con->query($mysql);
        if (!$resultado) {
            die("Error de insercion");
        }
        echo "<br>Fila insertada";
        ?>
    </body>
</html>
