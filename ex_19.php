<?php
function break_cat() {
    $verif = true;
    while($verif) {
        $var = trim ( fgets ( STDIN ) );
        if ($var == 'EOF')
        {
            break;
        }
        echo "$var";
    }   
}
?>