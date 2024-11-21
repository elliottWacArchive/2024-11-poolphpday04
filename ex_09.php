<?php
function multiples($nb) {
    $mult = 1;
    while ($mult <= 200000) {
        if ($nb % $mult == 0) {
            echo "$mult\n";
        }
        $mult++;
    }
}
?>