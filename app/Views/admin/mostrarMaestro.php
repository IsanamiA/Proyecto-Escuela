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
        input[type="text"] {
            padding: 10px;
            border: 1px solid #ffeecc; /* Borde del cuadro de búsqueda */
            border-radius: 5px;
            width: 20%;
            margin-right: 10px;
        }

        /* Estilo para el botón de búsqueda */
        button {
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
    <h2>Administrar Maestros</h2>

</body>
</html>
<table>
        <thead>
            <tr>
                <th style="background-color: #ffeecc;">Nombre</th>
                <th style="background-color: #ffeecc;">Apellido paterno</th>
                <th style="background-color: #ffeecc;">Apellido materno</th>
                <th style="background-color: #ffeecc;">Calle</th>
                <th style="background-color: #ffeecc;">Colonia</th>
                <th style="background-color: #ffeecc;">Numero</th>
                <th style="background-color: #ffeecc;">Municipio</th>
                <th style="background-color: #ffeecc;">Ciudad</th>
                <th style="background-color: #ffeecc;">Estado</th>
                <th style="background-color: #ffeecc;">Matricula</th>
                <th style="background-color: #ffeecc;">Telefono</th>
                <th style="background-color: #ffeecc;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($maestros as $maestro): ?>
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
                        <td>
                            <a href="<?= base_url('admin/deleteMaestro/' . $maestro->id) ?>">Eliminar</a>
                            <a href="<?= base_url('admin/editarMaestro/' . $maestro->id) ?>">Editar</a>
                        </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>