<?php
function goto_is_evil() {
    $i = 0;
    a:
    echo "wac\n";
    $i++;
    if ($i == 42) {
        goto b;
    }
    goto a;
    b:
}
?>