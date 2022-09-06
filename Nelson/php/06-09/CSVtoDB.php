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
        echo "Conexion exitosa"."<br>";
        $array = file("si.csv");
        
        function obtenerDatos($array) {
            $consulta = "INSERT INTO profesores VALUES ";
            for($i = 0; $i < count($array); $i++) {
                $dato = explode(';', $array[$i]);
                if ($i == 0) { $consulta .= '(NULL, "'.$dato[1].'", "'.$dato[2].'", "'.$dato[3].'")'; }
                else { $consulta .= ', (NULL, "'.$dato[1].'", "'.$dato[2].'", "'.$dato[3].'")'; }
            }
            return $consulta;
        }
        $consulta = obtenerDatos($array);
        $resultado = $con->query($consulta);
        echo $consulta; 
        
        ?>

    </body>
</html>
