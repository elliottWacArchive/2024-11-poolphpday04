<?php
function make_it_rain(&$my_array) {
    foreach($my_array as &$val) {
        $val = "rain";
    }
}
?>