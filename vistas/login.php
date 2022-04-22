<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<link rel="stylesheet" href="../css/login.css" />
<title>Municipalidad | Gualán</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="../crud/validarUsuario.php" class="sign-in-form" method="POST">
                    <h2 class="title">Bienvenido</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Usuario" name="nickname" id="nickname" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña" name="contrasena" id="contrasena" required/>
                    </div>
                    <input type="submit" value="Acceder" class="btn solid" />
                    <p class="social-text">!Accede ahora!</p>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3> Municipalidad Gualán</h3>
                    <p>
                        Gobernar es servir, Municipalidad de Gualán!
                    </p>
                </div>
                <img src="../img/municipalidadg.svg" class="image" alt="" />
            </div>
        </div>
    </div>
</body>
</html>
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
