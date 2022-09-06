<?php

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

?>