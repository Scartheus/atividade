<?php
$entrada = explode(" ", readline());
$X = intval($entrada[0]);
$Y = intval($entrada[1]);

if ($X > $Y) {
    $temp = $X;
    $X = $Y;
    $Y = $temp;
}

for ($i = $X + 1; $i < $Y; $i++) {
    if ($i % 5 == 2 || $i % 5 == 3) {
        echo $i . "\n";
    }
}
?>