<?php

function leer(String $path): array {
    $archivo = $path.".txt";
    if (!file_exists($archivo)) {
        return [];
    }
    $contenido = file_get_contents($archivo);
    $lineas = explode("\n", $contenido);
    return $lineas;
}


?>