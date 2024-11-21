<?php
function print_array_with_key($my_array) {
    $i = 0;
    foreach($my_array as $key => $val) {
        echo "$key : $val\n";
    }
}
?>