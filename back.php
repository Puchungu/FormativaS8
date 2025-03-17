<?php
$num = $_GET['num'];

function factorial($num) {
    if ($num == 0) {
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}

echo 'El factorial de ' . $num . ' es: ' . factorial($num);
?>