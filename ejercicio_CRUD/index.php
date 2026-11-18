<?php
$host     = 'mysql';
$db       = 'siga';
$user     = 'sigauser';
$password = 'sigapassword';
$charset  = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);
    $sql = "select * from modulos";
    $sentencia_preparada = $pdo->prepare($sql);
    $sentencia_preparada->execute();

} catch (\Throwable $error) {
    echo ('Se ha producido un error, aqui mas informacion: ');
    echo($error->getMessage());
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de modulos</title>
</head>
<body>
    <h1>Lista de modulos</h1>
    <h2>
        <a href="create.php">Crear modulo</a>
    </h2>

    <table border="1px">
        <tr>
            <td>#</td>
            <td>Nombre</td>
            <td>Abreviatura</td>
            <td>Creditos</td>
            <td>Horas semanales</td>
        </tr>

        <?php
        while($fila = $sentencia_preparada->fetch()){
        ?>
        <tr>
            <td><?= $fila['id'] ?></td>
            <td><?= $fila['nombre'] ?></td>
            <td><?= $fila['abreviatura'] ?></td>
            <td><?= $fila['creditos'] ?></td>
            <td><?= $fila['horassemanales'] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>

    <?php
    echo('fin')
    ?>
</body>
</html>
