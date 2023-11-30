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
    <h1>Agregar maestro</h1>
    <div class="form-container">
        <form action="<?= base_url('admin/insertMaestro'); ?>" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="aPaterno">Apellido paterno:</label>
                <input type="text" id="aPaterno" name="aPaterno" required>
            </div>
            <div class="form-group">
                <label for="aMaterno">Apellido materno:</label>
                <input type="text" id="aMaterno" name="aMaterno" required>
            </div>
            <div class="form-group">
                <label for="calle">Calle:</label>
                <input type="text" id="calle" name="calle" required>
            </div>
            <div class="form-group">
                <label for="colonia">Colonia:</label>
                <input type="text" id="colonia" name="colonia" required>
            </div>
            <div class="form-group">
                <label for="numero">Numero:</label>
                <input type="number" id="numero" name="numero" required>
            </div>
            <div class="form-group">
                <label for="municipio">Municipio:</label>
                <input type="text" id="municipio" name="municipio" required>
            </div>
            <div class="form-group">
                <label for="ciudad">Ciudad:</label>
                <input type="text" id="ciudad" name="ciudad" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" required>
            </div>
            <div class="form-group">
                <label for="matricula">Matricula:</label>
                <input type="text" id="matricula" name="matricula" required>
            </div>
            <div class="form-group">
                <label for="telefono">Celular:</label>
                <input type="number" id="telefono" name="telefono" required>
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
        window.location.href = '/menu/menuAdMaestro';
    });
</script>

</body>
</html>
