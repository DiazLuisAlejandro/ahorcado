<?php

function leer(String $path): array {
    $archivo = $path.".txt";
    if (!file_exists($archivo)) {
        return [];
    }
    $contenido = file_get_contents($archivo);
    $lineas = explode("\n", $contenido);
    foreach ($lineas as $key => $linea) {
        $lineas[$key] = trim(strtoupper($linea));
    }
    return $lineas;
}


?>