
<?php

// Seeder: introducir datos iniciales en la tabla.

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

    $sql = "INSERT INTO modulos
                (nombre, abreviatura, creditos, horassemanales)
            VALUES
                ('Implantacion de Sistemas Operativos', 'ISO', 8.00, 6),
                ('Planificacion y Administracion de Redes', 'PAR', 8.00, 7),
                ('Fundamentos de Hardware', 'FH', 6.00, 5),
                ('Gestion de Bases de Datos', 'GBD', 8.00, 6),
                ('Lenguajes de Marcas', 'LM', 4.00, 4);";

    $pdo->exec($sql);

    echo "Los módulos se han insertado correctamente.";

} catch (\Throwable $error) {
    echo "Se ha producido un error: ";
    echo $error->getMessage();
}
