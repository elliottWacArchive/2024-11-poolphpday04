<?php
function aff_array($my_array) {
    $i = 0;
    foreach($my_array as $val) {
        echo $val . "\n";
        $i++;
    }
    return $i;
}
?>