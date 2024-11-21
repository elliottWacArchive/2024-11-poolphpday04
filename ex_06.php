<?php
function get_angry_bird($nbr) {
    $str = "\n";
    for ($i = 0; $i < $nbr; $i++) {
        $str = "piou" . $str;
    }
    return $str;
}
?>