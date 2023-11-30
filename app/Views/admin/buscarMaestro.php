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
    <h2>Buscar Maestro</h2>

    <div class="search-container">
        <form method="GET" action="<?= base_url('admin/buscarMaestro/'); ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">
            <label for="matricula">Matricula:</label>
            <input type="text" name="matricula">
            <input type="submit" value="Buscar">
        </form>
    </div>

    <?php if (isset($maestros) && !empty($maestros)) : ?>
    <table>
        <thead>
            <tr>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Calle</th>
            <th>Colonia</th>
            <th>Número</th>
            <th>Municipio</th>
            <th>Ciudad</th>
            <th>Estado</th>
            <th>Matricula</th>
            <th>Telefono</th>               
            </tr>
        </thead>
        <tbody>
            <?php foreach ($maestros as $maestro) : ?>
                <tr>
                    <td><?= $maestro->nombre ?></td>
                    <td><?= $maestro->aPaterno ?></td>
                    <td><?= $maestro->aMaterno ?></td>
                    <td><?= $maestro->calle ?></td>
                    <td><?= $maestro->colonia ?></td>
                    <td><?= $maestro->numero ?></td>
                    <td><?= $maestro->municipio ?></td>
                    <td><?= $maestro->ciudad ?></td>
                    <td><?= $maestro->estado ?></td>
                    <td><?= $maestro->matricula ?></td>
                    <td><?= $maestro->telefono ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php else : ?>
    <p>No se encontraron resultados</p>
<?php endif ?>


</body>
</html>
