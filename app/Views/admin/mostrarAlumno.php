<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Estilo para el título "Administrar Alumnos" */
        h1 {
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
            text-align: center;
        }

        /* Estilo para las filas impares de la tabla */
        tr:nth-child(odd) {
            background-color: #ffeecc; /* Café pastel */
        }
    </style>
</head>
<body>
    <h1>Administrar Alumnos</h1>
    <table border="1">
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
            <th colspan="2">Acciones</th>
        </tr>
        <?php foreach ($alumnos as $alumno): ?>
            <tr>
                <td><?php echo $alumno->nombre; ?></td>
                <td><?php echo $alumno->aPaterno; ?></td>
                <td><?php echo $alumno->aMaterno; ?></td>
                <td><?php echo $alumno->numeroControl; ?></td>
                <td><?php echo $alumno->fechaN; ?></td>
                <td><?php echo $alumno->calle; ?></td>
                <td><?php echo $alumno->colonia; ?></td>
                <td><?php echo $alumno->numero; ?></td>
                <td><?php echo $alumno->municipio; ?></td>
                <td><?php echo $alumno->ciudad; ?></td>
                <td><?php echo $alumno->estado; ?></td>
                <td><?php echo $alumno->grado; ?></td>
                <td><?php echo $alumno->grupo; ?></td>

                <td>
                    <a href="<?=base_url('index.php/admin/deleteAlumno/'.$alumno->id);?>">Eliminar</a>
                    <a href="<?=base_url('index.php/admin/editarAlumno/'.$alumno->id);?>">Editar</a>
                </td>

            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
