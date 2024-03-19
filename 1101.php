<?php
function imprimir_sequencia_e_soma($menor, $maior) {
    $soma = 0;
    $sequencia = "";
    for ($i = $menor; $i <= $maior; $i++) {
        $soma += $i;
        $sequencia .= $i . " ";
    }
    echo trim($sequencia) . " Sum=" . $soma . "\n";
}

while (true) {
    $entrada = explode(" ", readline());
    $M = intval($entrada[0]);
    $N = intval($entrada[1]);

    if ($M <= 0 || $N <= 0) {
        break;
    }

    $menor = min($M, $N);
    $maior = max($M, $N);

    imprimir_sequencia_e_soma($menor, $maior);
}
?>
