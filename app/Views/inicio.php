<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Administrador</title>
    <style>
        body {
            margin: 0;
            font-family: Arial;
            font-weight: bold; 
        }

        .navbar {
            background-color: #ffeecc;
            color: black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 24px;
            padding: 15px;
        }

        .cerrar-sesion {
            background-color: #e74c3c;
            color: white;
            padding: 15px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
        }

        .recuadros-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px;
        }

        .recuadro {
            background-color: #D5D8DC; 
            border: none; 
            border-radius: 10px; 
            margin: 50px  200px; 
            padding: 50px;
            text-align: center;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); 
            display: inline-block; 
            cursor: pointer; 
            width: 200px; 
            transition: transform 0.3s ease; 
        }
        .recuadro img {
            max-width: 100px; 
            margin-bottom: 10px; 
        }
        .recuadro h2 {
            font-weight: bold; 
        }
        .recuadro:hover {
            transform: translateX(10px); 
        }
        .navbar a {
            text-decoration: none; 
            color: black; 
            display: flex;
            align-items: center;
        }
        .navbar img.cerrar {
            height: 40px; 
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img src="<?= base_url('img/logo.png'); ?>" alt="" height="70" class="mx-auto d-block"><!--Se establece la ruta de la imagen--->
        <p>Escuela Primaria General Lázaro Cárdenas</p>
        <a href="<?= base_url('/'); ?>"><!--Se establece la ruta para redireccionar al inicio de sesion--->
            <div>
                <img src="<?= base_url('img/cerrar.png'); ?>" class="cerrar"><!--Se establece la ruta de la imagen--->
            </div>
        </a>
    </div>
    
    <div class="recuadros-container">
        <div class="recuadro" onclick="window.location.href='menu/menuAdAlumno'"><!--Se establece la ruta para redireccionar al menu del alumno--->
            <img src="<?= base_url('img/alumno.png'); ?>" alt="" height="100" class="mx-auto d-block"><!--Se establece la ruta de la imagen--->
            <h2>Administrar Alumno</h2>
        </div>

        <div class="recuadro" onclick="window.location.href='menu/menuAdMateria'"><!--Se establece la ruta para redireccionar al menu de las materias--->
            <img src="<?= base_url('img/materias.png'); ?>" alt="" height="100" class="mx-auto d-block"><!--Se establece la ruta de la imagen--->
            <h2>Administrar Materias</h2>
        </div>

        <div class="recuadro" onclick="window.location.href='<?= base_url('menu/menuAdMaestro'); ?>'"><!--Se establece la ruta para redireccionar al menu del maestro--->
            <img src="<?= base_url('img/maestro.png'); ?>" alt="" height="100" class="mx-auto d-block"><!--Se establece la ruta de la imagen--->
            <h2>Administrar Maestros</h2>
        </div>
    </div>
</body>
</html>
