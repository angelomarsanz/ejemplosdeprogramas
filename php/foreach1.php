<?php
header("Content-Type: text/html; charset=UTF-8");
$array = array("uno", "dos", "tres");
foreach ($array as $clave => $valor) {
    echo "Posición: $clave valor: $valor<br />\n";
}