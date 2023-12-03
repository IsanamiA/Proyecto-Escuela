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
    <h1>Editar calificaciones</h1>
    <div class="form-container">
        <form action="<?= base_url('maestro/update'); ?>" method="POST">
        <?= csrf_field() ?>
    <input type="hidden" name ="id" value="<?= $calificacion->id ?>" />
            <div class="form-group">
                <label for="alumno">Alumno:</label>
                <input type="text" id="alumno" name="alumno" required value="<?= $calificacion->alumno ?>">
            </div>
            <div class="form-group">
                <label for="español">Español:</label>
                <input type="text" id="español" name="español" value="<?= $calificacion->español ?>">
            </div>
            <div class="form-group">
                <label for="matematicas">Matemáticas:</label>
                <input type="text" id="matematicas" name="matematicas" value="<?= $calificacion->matematicas ?>">
            </div>
            <div class="form-group">
                <label for="historia">Historia:</label>
                <input type="text" id="historia" name="historia" value="<?= $calificacion->historia ?>">
            </div>
            <div class="form-group">
                <label for="civismo">Civismo:</label>
                <input type="text" id="civismo" name="civismo" value="<?= $calificacion->civismo ?>">
            </div>
            <div class="form-group">
                <label for="edFisica">Educación física:</label>
                <input type="text" id="edFisica" name="edFisica" value="<?= $calificacion->edFisica ?>">
            </div>
            <div class="form-group">
                <label for="geografia">Geografía:</label>
                <input type="text" id="geografia" name="geografia" value="<?= $calificacion->geografia ?>">
            </div>
            <div class="form-group">
                <label for="ciencias">Ciencias naturales:</label>
                <input type="text" id="ciencias" name="ciencias" value="<?= $calificacion->ciencias ?>">
            </div>
            <div class="form-group-buttons">
                <input type="submit" value="Enviar">
                <input type="button" value="Cancelar" id="cancelButton">
            </div> 
        </form>
    </div>
<!-- Script para limpiar campos y redirigir al pulsar el botón Cancelar -->
<script>
    document.getElementById('cancelButton').addEventListener('click', function() {
        var formElements = document.getElementsByTagName('input');
        
        for (var i = 0; i < formElements.length; i++) {
            if (formElements[i].type !== 'button') {
                formElements[i].value = '';
            }
        }
        window.location.href = '/menu/menuAdCalificaciones';
    });
</script>

</body>
</html>

