<?php
function ordenar_valores($valores) {
    $pares = array_filter($valores, function($valor) {
        return $valor % 2 == 0;
    });
    $impares = array_filter($valores, function($valor) {
        return $valor % 2 != 0;
    });
    sort($pares);
    rsort($impares);
    return array_merge($pares, $impares);
}

$N = intval(trim(fgets(STDIN)));

$valores = [];

for ($i = 0; $i < $N; $i++) {
    $valor = intval(trim(fgets(STDIN)));
    $valores[] = $valor;
}

$valores_ordenados = ordenar_valores($valores);

foreach ($valores_ordenados as $valor) {
    echo $valor . "\n";
}
?>
