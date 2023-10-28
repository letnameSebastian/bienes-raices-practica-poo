<?php

require '../../includes/app.php';
use App\Vendedor;
estaAutenticado();

//Validar id valido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location:/admin');
}

//Obtener los datos de la propiedad
$vendedor = Vendedor::find($id);

$errores = Vendedor::getErrores();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Asignar los valores
    $args = $_POST['vendedor'];
    //Sincronizar objeto en memoria con lo que el usuario escribio
    $vendedor->sincronizar($args);
    //Validación
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
    <h1>Actualizar Vendedor(a)</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form class="formulario" method="POST">
        <?php include '../../includes/templates/formulario_vendedores.php'; ?>
        <input type="submit" value="Actualizar Vendedor(a)" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer');
?>
