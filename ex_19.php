<?php
function break_cat() {
    $verif = true;
    while($verif) {
        $var = trim ( fgets ( STDIN ) );
        echo "$var";
        if ($var == 'EOF')
        {
            break;
        }
    }   
}
?>