<?php
function get_array_key($arr, $k) {
    foreach($arr as $key => $val) {
        if ($k == $key) {
            echo $val;
        }
    }
}
?>