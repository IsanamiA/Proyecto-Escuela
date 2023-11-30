<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            margin: 0;
            font-family: Arial;
        }

        .navbar {
            background-color: #ffeecc; 
            color: black; 
            display: flex;
            align-items: center;
            padding: 10px;
        }

        .navbar img.logo {
            height: 70px; 
            margin-right: 10px; 
        }

        .navbar p {
            margin: 1000; 
            transform: translate(50%, 15%); 
            font-size: 24px; 
            font-weight: bold; 
        }

        .navbar button {
            background-color: #F59223; 
            color: white; 
            border: none;
            padding: 8px 15px; 
            border-radius: 5px;
            cursor: pointer;
        }

        .navbar a {
            text-decoration: none; 
            color: black; 
            display: flex;
            align-items: center;
            margin-right: 0px; 
        }

        .navbar img.cerrar {
            height: 40px; 
            margin: 0; 
        }

        .navbar img.button {
            height: 40px; 
            transform: translate(1000%, 0%);
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img src="<?= base_url('img/logo.png'); ?>" alt="" class="logo"> <!--Se establece la ruta para tomar la imagen del logo--->
        <p>Escuela Primaria General Lázaro Cárdenas</p>
                  <a href="<?= base_url('inicioMaestro'); ?>"> <!--Se establece la ruta para retornar al inicio del maestro por medio de la imagen--->
            <img src="<?= base_url('img/inicio.png'); ?>" alt="Inicio" class="button"> <!--Se establece la ruta para tomar la imagen del inicio--->
        </a>

        <a href="<?= base_url('/'); ?>"><!--Se establece la ruta para retornar al inicio de sesion por medio de la imagen--->
            <img src="<?= base_url('img/cerrar.png'); ?>" alt="" class="cerrar"> <!--Se establece la ruta para tomar la imagen de cerrar sesion --->
        </a>
    </div>
</body>
</html>
