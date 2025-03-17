<?php
$usuarios = [
    ["nombre" => "Juan", "edad" => 25, "ciudad" => "Madrid"],
    ["nombre" => "Ana", "edad" => 17, "ciudad" => "Barcelona"],
    ["nombre" => "Luis", "edad" => 30, "ciudad" => "Valencia"],
    ["nombre" => "Marta", "edad" => 16, "ciudad" => "Sevilla"],
    ["nombre" => "Carlos", "edad" => 22, "ciudad" => "Bilbao"]
];
function filtrarUsuariosMayores($usuarios) {
    $usuariosMayores = [];
    foreach ($usuarios as $usuario) {
        if ($usuario["edad"] >= 18) {
            $usuariosMayores[] = $usuario;
        }
    }
    return $usuariosMayores;
}
$usuariosMayores = filtrarUsuariosMayores($usuarios);
foreach ($usuariosMayores as $usuario) {
    echo "Nombre: " . $usuario["nombre"] . ", Edad: " . $usuario["edad"] . ", Ciudad: " . $usuario["ciudad"] . "<br>";
}
?>