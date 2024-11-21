<?php
function return_calls() {
    static $a = 0;
    $a++;
    return ($a * 3);
}
?>