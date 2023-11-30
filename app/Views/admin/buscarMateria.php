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
            input[type="submit"] {
            padding: 10px 20px;
            background-color: #ffeecc; /* Color del botón */
            border: 1px solid #ffeecc; /* Borde del botón */
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<h2></h2>
<h2></h2>
    <h2>Buscar Materias</h2>

    <div class="search-container">
        <form method="GET" action="<?= base_url('admin/buscarMateria/'); ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">
            <label for="nombreCorto">Nombre corto:</label>
            <input type="text" name="nombreCorto">
            <input type="submit" value="Buscar">
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th style="background-color: #ffeecc;">Nombre</th>
                <th style="background-color: #ffeecc;">Nombre corto</th>
                <th style="background-color: #ffeecc;">Clave</th>
                <th style="background-color: #ffeecc;">Unidades</th>
                <th style="background-color: #ffeecc;">Acciones</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach($materias as $materia): ?>
                <tr>
                        <td><?=$materia->nombre ?></td>
                        <td><?=$materia->nombreCorto ?></td>
                        <td><?=$materia->clave ?></td>
                        <td><?=$materia->unidades ?></td>
                        <td>    
                            <a href="<?=base_url('materia/delete/'.$materia->id);?>">Eliminar</a>
                            <a href="<?=base_url('editarMateria/'.$materia->id);?>">Editar</a>
                        </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
