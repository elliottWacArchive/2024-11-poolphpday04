<?php
function break_cat() {
    $verif = true;
    $fp = fopen("php://stdin", "r");
    while($verif) {
        $fr = fgets($fp);
        echo $fr;
        if ($fr == "EOF\n")
        {
            break;
        }
    }   
}
?>