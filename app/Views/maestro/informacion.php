<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            text-align: center;
            padding: 0px;
        }

        .form-container {
            width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
            margin-top: 40px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }

        .input-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); 
            grid-gap: 20px; 
        }

        .input-container > div {
            width: 100%;
            margin-bottom: 10px;
        }
        .form-container img {
            width: 200px; 
            height: 200px; 
            margin-right: 20px; 
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #CDCECE;
            background-color: #EFF2F2;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <h1>Información personal</h1>
    <h2></h2>
    <h1></h1>
    <div class="form-container">
    <img src="<?= base_url('img/usuario.png'); ?>">
        <div class="input-container">
        <?php
            $session = session();
                $usuario = $session->get('maestro');
            ?>
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?= $usuario->nombre?>" readonly>
            </div>
            <div>
                <label for="aPaterno">Apellido paterno:</label>
                <input type="text" id="aPaterno" name="aPaterno" value="<?= $usuario->aPaterno?>" readonly>
            </div>
            <div>
                <label for="aMaterno">Apellido materno:</label>
                <input type="text" id="aMaterno" name="aMaterno" value="<?= $usuario->aMaterno?>" readonly>
            </div>
            <div>
                <label for="calle">Calle:</label>
                <input type="text" id="calle" name="calle" value="<?= $usuario->calle?>" readonly>
            </div>
            <div>
                <label for="colonia">Colonia:</label>
                <input type="text" id="colonia" name="colonia" value="<?= $usuario->colonia?>" readonly>
            </div>
            <div>
                <label for="numero">Numero:</label>
                <input type="number" id="numero" name="numero" value="<?= $usuario->numero?>" readonly>
            </div>
            <div>
                <label for="municipio">Municipio:</label>
                <input type="text" id="municipio" name="municipio" value="<?= $usuario->municipio?>" readonly>
            </div>
            <div>
                <label for="ciudad">Ciudad:</label>
                <input type="text" id="ciudad" name="ciudad" value="<?= $usuario->ciudad?>" readonly>
            </div>
            <div>
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" value="<?= $usuario->estado?>" readonly>
            </div>
            <div>
                <label for="matricula">Matricula:</label>
                <input type="text" id="matricula" name="matricula" value="<?= $usuario->matricula?>" readonly>
            </div>
            <div>
                <label for="telefono">Telefono:</label>
                <input type="text" id="telefono" name="telefono" value="<?= $usuario->telefono?>" readonly>
            </div>
        </div>
    </div>
</body>
</html>
