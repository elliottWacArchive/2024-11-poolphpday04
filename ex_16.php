<?php
function print_double_array($darr) {
    foreach($darr as $arr) {
        foreach($arr as $val) {
            echo "$val\n";
        }
    }
}
?>