<?php
$X = intval(trim(fgets(STDIN)));
$Y = intval(trim(fgets(STDIN)));

if ($X > $Y) {
    $temp = $X;
    $X = $Y;
    $Y = $temp;
}

$soma_impares = 0;

for ($i = $X + 1; $i < $Y; $i++) {
    if ($i % 2 != 0) {
        $soma_impares += $i;
    }
}

echo $soma_impares . "\n";
?>