```php
<?php 
$alumnos = [ 
    ['Atienza Bermúdez, Alejandro', 'm', 20], 
    ['Calderer Sánchez, Lucas', 'm', 21], 
    ['Cano Merino, Carlos', 'm', 20], 
    ['Chari, Abdelali', 'm', 22], 
    ['García Zarco, Francisco José', 'm', 21], 
    ['Gómez Pérez, Samuel', 'm', 20], 
    ['Iáñez Navarro, Daniel', 'm', 22], 
    ['López Lasheras, Alan', 'm', 21], 
    ['Maldonado Cabezas, Francisco', 'm', 20], 
    ['Martín Arias, Carlos', 'm', 23], 
    ['Moreno González, Alexandra', 'f', 20], 
    ['Muñoz Moreno, Elisabet', 'f', 21], 
    ['Ourhzif, Aymane', 'm', 22], 
    ['Sánchez Ortiz, Emilio David', 'm', 20], 
    ['Sánchez Rodríguez, Beatriz', 'f', 23], 
    ['Torres Gómez, Ignacio', 'm', 21], 
    ['Uréndez Jiménez, Alba', 'f', 22], 
    ['Uribe Aranda, Francisco', 'm', 20], 
    ['Velasco Clavero, Pablo', 'm', 21]
]; 
?> 

<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Document</title>  
    </head> 

    <body> 
        <h1>Visualizando el array</h1> 
 
        <table border="1px"> 
            <tr> 
                <td>#</td> 
                <td>Alumno</td> 
                <td>Género</td>
                <td>Edad</td>
            </tr> 
 
            <?php 
            foreach($alumnos as $indice => $alumno) { 

                // Color de la fila según el género
                if ($alumno[1] == 'm') {
                    $colorFila = 'green';
                } else {
                    $colorFila = 'blue';
                }

                ?> 

                <tr style="background-color: <?= $colorFila ?>;">
                    <td><?= $indice ?></td> 
                    <td><?= $alumno[0] ?></td> 
                    <td><?= $alumno[1] ?></td>
                    <td style="color: <?= $colorEdad ?>;">
                        <?= $alumno[2] ?>
                    </td>
                </tr> 

                <?php 
            } 
            ?> 
        </table> 
 
    </body> 
</html>
```