<?php
const CONFIG = [
    'db' => [
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'name' => 'martiatorrent'
    ],
    'app' => [
        'name' => 'MartiaTorrent',
        'email' => ''
    ]
];

// conexion a base de datos mysqli
$conexion = new mysqli(CONFIG['db']['host'], CONFIG['db']['user'], CONFIG['db']['pass'], CONFIG['db']['name']);
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
require_once('funciones.php');

// obtener categorias
$categorias = getCategorias($conexion);
