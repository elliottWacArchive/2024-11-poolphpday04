<?php
function multiples($nb) {
    $mult = 1;
    if ($nb == 0)
        echo "0\n";
    while ($mult <= 200000) {
        if ($nb % $mult == 0) {
            echo "$mult\n";
        }
        $mult++;
    }
}
?>