
<?php

// Esta pagina recibe los datos de un modulo nuevo
// y los inserta en la tabla modulos.

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

    // Comprobar que se han enviado los datos obligatorios.

    if (!isset($_POST['nombre']) ||
        !isset($_POST['abreviatura']) ||
        !isset($_POST['creditos']) ||
        !isset($_POST['horassemanales'])) {

        header('Location: error.php');
        exit;
    }

    // Recoger los datos del formulario.

    $nombre = $_POST['nombre'];
    $abreviatura = $_POST['abreviatura'];
    $creditos = $_POST['creditos'];
    $horassemanales = $_POST['horassemanales'];

    // Si las horas estan vacias, guardamos NULL.

    if ($horassemanales == '') {
        $horassemanales = null;
    }

    // Sentencia preparada para insertar el modulo.

    $sql = "INSERT INTO modulos
                (nombre, abreviatura, creditos, horassemanales)
            VALUES
                (:nombre, :abreviatura, :creditos, :horassemanales);";

    $sentencia_preparada = $pdo->prepare($sql);

    $datos = [
        'nombre' => $nombre,
        'abreviatura' => $abreviatura,
        'creditos' => $creditos,
        'horassemanales' => $horassemanales
    ];

    $sentencia_preparada->execute($datos);

    // Redireccion a la pagina de exito.

    header('Location: exito.php');
    exit;

} catch (\Throwable $error) {

    // Si se produce un error, redireccionamos a error.php.

    header('Location: error.php');
    exit;
}
