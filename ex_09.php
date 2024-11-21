<?php
function multiples($nb) {
    $mult = 0;
    while ($mult <= 200000) {
        if ($mult % $nb == 0) {
            echo "$mult\n";
        }
        $mult++;
    }
}
?>