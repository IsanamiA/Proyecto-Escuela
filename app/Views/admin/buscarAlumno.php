<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Estilo para el título "Administrar Alumnos" */
        h2 {
            text-align: center;
        }

        /* Estilo para la barra de búsqueda */
        .search-bar {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Estilo para el cuadro de búsqueda */
        input[type="text"],
        input[type="number"] {
            padding: 10px;
            border: 1px solid #ffeecc; /* Borde del cuadro de búsqueda */
            border-radius: 5px;
            width: 20%;
            margin-right: 10px;
        }

        /* Estilo para el botón de búsqueda */
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #ffeecc; /* Color del botón */
            border: 1px solid #ffeecc; /* Borde del botón */
            border-radius: 5px;
            cursor: pointer;
        }

        /* Estilo para la tabla */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #000; /* Línea divisora de datos (negra) */
            padding: 8px;
            text-align: left;
        }

        /* Estilo para las filas impares de la tabla */
        tr:nth-child(odd) {
            background-color: #ffeecc; /* Café pastel */
        }
    </style>
</head>
<body>
<h2></h2>
<h2></h2>
    <h2>Buscar Alumno</h2>

    <div class="search-container">
        <form method="GET" action="<?= base_url('admin/buscarAlumno/'); ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">
            <label for="numeroControl">Nùmero de control:</label>
            <input type="number" name="numeroControl">
            <label for="grado">Grado:</label>
            <input type="text" name="grado">
            <label for="grupo">Grupo:</label>
            <input type="number" name="grupo">
            <input type="submit" value="Buscar">
        </form>
    </div>

    <?php if (isset($alumnos) && !empty($alumnos)) : ?>
    <table>
        <thead>
            <tr>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Número de control</th>
            <th>Fecha de nacimiento</th>
            <th>Calle</th>
            <th>Colonia</th>
            <th>Número</th>
            <th>Municipio</th>
            <th>Ciudad</th>
            <th>Estado</th>
            <th>Grado</th>
            <th>Grupo</th>               
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumnos as $alumno) : ?>
                <tr>
                    <td><?= $alumno->nombre ?></td>
                    <td><?= $alumno->aPaterno ?></td>
                    <td><?= $alumno->aMaterno ?></td>
                    <td><?= $alumno->numeroControl ?></td>
                    <td><?= $alumno->fechaN ?></td>
                    <td><?= $alumno->calle ?></td>
                    <td><?= $alumno->colonia ?></td>
                    <td><?= $alumno->numero ?></td>
                    <td><?= $alumno->municipio ?></td>
                    <td><?= $alumno->ciudad ?></td>
                    <td><?= $alumno->estado ?></td>
                    <td><?= $alumno->grado ?></td>
                    <td><?= $alumno->grupo ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php else : ?>
    <p>No se encontraron resultados</p>
<?php endif ?>


</body>
</html>
