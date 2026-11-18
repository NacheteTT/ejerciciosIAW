<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Alta de modulos</h1>

        <form action="store.php" method="post">
            <a href="index.php">Volver al listado</a>

            <label for="nombre">Nombre:</label>
            <input type="text"
                    name="nombre"
                    id="nombre"
                    value=""
                    placeholder="Introduce el nombre del modulo"
                    required
                    minlength="2"
                    maxlength="100">
            <br>

            <label for="abreviatura">Abreviatura:</label>
            <input type="text"
                    name="abreviatura"
                    id="abreviatura"
                    value=""
                    placeholder="Introduce la abreviatura"
                    required
                    maxlength="5">
            <br>

            <label for="creditos">Creditos:</label>
            <input type="number"
                    name="creditos"
                    id="creditos"
                    value=""
                    placeholder="Introduce los creditos"
                    required
                    min="0"
                    max="99.99"
                    step="0.01">
            <br>

            <label for="horassemanales">Horas semanales:</label>
            <input type="number"
                    name="horassemanales"
                    id="horassemanales"
                    value=""
                    placeholder="Introduce las horas semanales"
                    min="0">
            <br>

            <button type="submit">Crear modulo</button>
        </form>
    </body>
</html>
