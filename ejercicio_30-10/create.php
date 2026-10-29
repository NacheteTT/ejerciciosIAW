
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alta de módulos</title>
    </head>
    <body>

        <h1>Alta de módulos</h1>

        <form action="store.php" method="post">

            <label for="nombre">Nombre:</label>
            <input type="text"
                   name="nombre"
                   id="nombre"
                   placeholder="Introduce el nombre del módulo"
                   required
                   minlength="2"
                   maxlength="100">
            <br>

            <label for="abreviatura">Abreviatura:</label>
            <input type="text"
                   name="abreviatura"
                   id="abreviatura"
                   placeholder="Ej.: ISO"
                   required
                   minlength="1"
                   maxlength="5">
            <br>

            <label for="creditos">Créditos:</label>
            <input type="number"
                   name="creditos"
                   id="creditos"
                   placeholder="Ej.: 8.00"
                   required
                   min="0"
                   max="99.99"
                   step="0.01">
            <br>

            <label for="horassemanales">Horas semanales:</label>
            <input type="number"
                   name="horassemanales"
                   id="horassemanales"
                   placeholder="Ej.: 6"
                   min="-32768"
                   max="32767"
                   step="1">
            <br>

            <button type="submit">Alta módulo</button>

        </form>

    </body>
</html>
