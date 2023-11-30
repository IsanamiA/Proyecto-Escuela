<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFFFFF;
            text-align: center;
            padding: 0px;
        }

        h1 {
            color: #333;
            margin-top: 40px;
        }

        .form-container {
            width: 800px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            font-weight: bold;
            display: block;
            text-align: center;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc; 
            border-radius: 3px;
            margin-bottom: 10px;
        }

        input[type="submit"],
        input[type="button"] {
            width: 40%;
            padding: 10px 10px; 
            background-color: #F8901B;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            display: inline-block;
            margin-bottom: 10px;
        }

        input[type="button"] {
            background-color: #FD2218;
        }

        .form-group-buttons {
            text-align: center; /* Mueve los botones hacia la derecha */
        }
    </style>
</head>
<body>
    <h1>Editar materia</h1>
    <div class="form-container">
        <form action="<?= base_url('admin/updateMateria'); ?>" method="POST">
        <?= csrf_field() ?>

        <input type="hidden" name ="id" value="<?= $materia->id ?>" />

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required value="<?= $materia->nombre ?>">
            </div>
            <div class="form-group">
                <label for="nombreCorto">Nombre corto:</label>
                <input type="text" id="nombreCorto" name="nombreCorto" required value="<?= $materia->nombreCorto ?>">
            </div>
            <div class="form-group">
                <label for="clave">Clave:</label>
                <input type="text" id="clave" name="clave" required value="<?= $materia->clave ?>">
            </div>
            <div class="form-group">
                <label for="unidades">Número de unidades:</label>
                <input type="text" id="unidades" name="unidades" required value="<?= $materia->unidades ?>">
            </div>
            <div class="form-group-buttons">
                <input type="submit" value="Enviar">
                <input type="button" value="Cancelar">
            </div>
        </form>
    </div>
</body>
</html>
