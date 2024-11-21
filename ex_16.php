<?php
function print_double_array($darr) {
    foreach($darr as $arr) {
        foreach($arr as $val) {
            echo "$val\n";
        }
    }
}

$darr = array(
    array(
        1,2,3,4
    ),
    array(
        "cc","cv","tfq"
    )
);

print_double_array($darr);
?>