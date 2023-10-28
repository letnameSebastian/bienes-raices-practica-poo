<?php

//Importar conexion
require 'includes/app.php';
$db = conectarDB();

$errores = [];

//Autenticar usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!$email) {
        $errores[] = 'El email es obligatorio o no es válido';
    }
    if (!$password) {
        $errores[] = 'El password es obligatorio o no es válido';
    }

    if (empty($errores)) {
        //Consulta
        $query = "SELECT * FROM usuarios WHERE email='${email}'";
        $resultado = mysqli_query($db, $query);
        if ($resultado->num_rows) {
            
            //Revisar password
            $usuario = mysqli_fetch_assoc($resultado);
            $auth = password_verify($password, $usuario['password']);

            if ($auth) {
                session_start();
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;
                header('Location: /admin');
            } else {
                $errores[] = 'El password es incorrecto';
            }
        } else {
            $errores[] = 'El usuario no existe';
        }
    }
}

//Inlcuye header
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesión</h1>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form class="formulario" method="post">
        <fieldset>
            <legend>Email y Password</legend>
            <label for="email">E-mail</label>
            <input id="email" type="email" placeholder="Tu Email" name="email">

            <label for="password">Password</label>
            <input id="password" type="password" placeholder="Tu Password" name="password">
        </fieldset>
        <input type="submit" value="Iniciar Sesión" class="boton-verde">
    </form>
</main>

<?php
mysqli_close($db);
incluirTemplate('footer');
?>