<?php
function get_array_key($arr, $k) {
    foreach($arr as $key => $val) {
        if ($k == $key) {
            return $val;
        }
    }
}

$arr = array (
    "dd" => "ss",
    "zz" => "dd"
);

echo get_array_key($arr, "dd");
?>