<?php

$host     = 'mysql';
$db       = 'siga';
$user     = 'sigauser';
$password = 'sigauser';
$charset  = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);

    // sentencia preparada
    $nombre = 'Bases de Datos';
    $abreviatura = 'BD';
    $creditos = 6.00;
    $horassemanales = 6;

    $sql = "INSERT INTO modulos
                (nombre, abreviatura, creditos, horassemanales)
                VALUES (:nombre, :abreviatura, :creditos, :horassemanales);";

    $sentencia_preparada = $pdo->prepare($sql);

    $datos = [
        'nombre' => $nombre,
        'abreviatura' => $abreviatura,
        'creditos' => $creditos,
        'horassemanales' => $horassemanales
    ];

    $sentencia_preparada->execute($datos);

    echo('insert ok');

} catch (\Throwable $error) {
    echo('se ha producido un error, aqui mas informacion: ');
    echo($error->getMessage());
}
