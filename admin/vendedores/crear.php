<?php

require '../../includes/app.php';

use App\Vendedor;

estaAutenticado();

$vendedor = new Vendedor;

$errores = Vendedor::getErrores();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //Crear nueva instancia
    $vendedor = new Vendedor($_POST['vendedor']);

    //Validar que no haya campos vacios
    $errores = $vendedor->validar();

    if (empty($errores)) {

        //Guarda en la base de datos
        $vendedor->guardar();
    }
}

//Inlcuir header
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>Registrar Vendedor(a)</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form class="formulario" method="POST" action="/admin/vendedores/crear.php">
        <?php include '../../includes/templates/formulario_vendedores.php'; ?>
        <input type="submit" value="Registrar Vendedor(a)" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer');
?>
