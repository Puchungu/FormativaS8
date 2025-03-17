<?php
$num = $_GET['num'];

if ($num > 0){
    echo "El numero ". $num . " es positivo";
} else if ($num < 0){
    echo "El numero ". $num . " es negativo";
} else {
    echo "El numero ". $num . " es cero, se considera numero neutro";
}
?>