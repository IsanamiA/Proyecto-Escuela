<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .navbar {
            background-color: #ffeecc;
        }

        .navbar-brand {
            font-size: 25px;
            font-weight: bold;
            font-family: 'Century Gothic';
        }

        .vertical-center {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .custom-btn {
            background-color: #F5AD3D;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Inicio de sesión</a>
        </div>
    </nav>

    <div class="container">
        <div class="row vertical-center">
            <div class="col-lg-8">
                <img src="<?= base_url('img/logo.png'); ?>" alt="" height="400" class="mx-auto d-block">
            </div>
            <div class="col-lg-4">
                <?php if (session()->has('error')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= session('error') ?>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url('login'); ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" name="usuario" class="form-control" id="usuario" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="contraseña" class="form-label">Contraseña</label>
                        <input type="password" name="contraseña" class="form-control" id="contraseña">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="recordarme">
                        <label class="form-check-label" for="recordarme">Recordarme</label>
                    </div>
                    <button type="submit" class="btn custom-btn mt-3 mx-auto d-block">Entrar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
