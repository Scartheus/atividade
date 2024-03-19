<?php
function decodificar_cifra_cesar($texto_codificado, $deslocamento) {
    $texto_decodificado = '';
    $tamanho_alfabeto = 26;

    for ($i = 0; $i < strlen($texto_codificado); $i++) {
        $caractere = $texto_codificado[$i];

        if (ctype_upper($caractere)) {
            $deslocamento_atras = ($deslocamento % $tamanho_alfabeto);

            $codigo_ascii = ord($caractere) - $deslocamento_atras;

            if ($codigo_ascii < ord('A')) {
                $codigo_ascii += $tamanho_alfabeto;
            }

            $texto_decodificado .= chr($codigo_ascii);
        } else {
            $texto_decodificado .= $caractere;
        }
    }

    return $texto_decodificado;
}

$N = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $N; $i++) {
    $texto_codificado = trim(fgets(STDIN));
    $deslocamento = intval(trim(fgets(STDIN)));

    echo decodificar_cifra_cesar($texto_codificado, $deslocamento) . "\n";
}
?>