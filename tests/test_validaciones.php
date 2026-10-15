<?php

require_once __DIR__ . '/../src/validaciones.php';

$casos = [
    ["Teclado", true],
    ["", false],
    ["  ", false],
    ["Mouse", true],
];

$fallos = 0;

foreach ($casos as [$entrada, $esperado]) {
    $obtenido = validarNombreProducto($entrada);

    if ($obtenido === $esperado) {
        echo "La prueba paso: " . var_export($entrada, true) . "\n";
    } else {
        echo "FAIL: el resultado no fue el esperado.\n";
        $fallos++;
    }
}

if ($fallos > 0) {
    exit(1);
}
