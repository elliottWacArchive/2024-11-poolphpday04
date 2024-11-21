<?php
function continue_cat() {
    $verif = true;
    while($verif) {
        $var = trim ( fgets ( STDIN ) );
        echo "$var";
        if ($var != 'EOF')
        {
            continue;
        }
        $verif = false;
    }   
}
?>