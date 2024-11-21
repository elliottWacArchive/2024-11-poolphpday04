<?php
function print_range($min) {
    $val = $min;
    do {
        echo $min . "\n";
        $min++;
    } while ($min <= 42);
    switch ($val) {
        case 42:
            return true;
        default:
            return false;
    }
}
?>