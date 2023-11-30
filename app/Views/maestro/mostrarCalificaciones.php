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

    <h2>Administrar Calificaciones</h2>
    <table>
        <thead>
            <tr>
                <th style="background-color: #ffeecc;">Alumno</th>
                <th style="background-color: #ffeecc;">Español</th>
                <th style="background-color: #ffeecc;">Matemáticas</th>
                <th style="background-color: #ffeecc;">Historia</th>
                <th style="background-color: #ffeecc;">Civismo</th>
                <th style="background-color: #ffeecc;">Educación física</th>
                <th style="background-color: #ffeecc;">Geografía</th>
                <th style="background-color: #ffeecc;">Ciencias naturales</th>
                <th style="background-color: #ffeecc;">Acciones</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach($calificaciones as $calificacion): ?>
                <tr>
                        <td><?=$calificacion->alumno ?></td>
                        <td><?=$calificacion->español ?></td>
                        <td><?=$calificacion->matematicas ?></td>
                        <td><?=$calificacion->historia ?></td>
                        <td><?=$calificacion->civismo ?></td>
                        <td><?=$calificacion->edFisica ?></td>
                        <td><?=$calificacion->geografia ?></td>
                        <td><?=$calificacion->ciencias ?></td>
                        <td>    
                            <a href="<?=base_url('maestro/editar/'.$calificacion->id);?>">Editar</a>
                        </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body> 
</html>
