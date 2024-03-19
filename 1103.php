<?php

while (true) {
    fscanf(STDIN, "%d %d %d %d", $hora_atual, $minuto_atual, $hora_despertador, $minuto_despertador);

    if ($hora_atual == 0 && $minuto_atual == 0 && $hora_despertador == 0 && $minuto_despertador == 0) {
        break;
    }

    $minutos_atual = $hora_atual * 60 + $minuto_atual;
    $minutos_despertador = $hora_despertador * 60 + $minuto_despertador;

    $diferenca_minutos = ($minutos_despertador - $minutos_atual + 1440) % 1440;

    echo $diferenca_minutos . "\n";
}
?>