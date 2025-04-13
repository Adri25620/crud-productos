<?php
include_once '../../views/templates/header.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require '../../models/producto.php';

$_POST['producto_nombre'] = htmlspecialchars($_POST['producto_nombre']);
$_POST['producto_precio'] = filter_var($_POST['producto_precio'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$_POST['producto_cantidad'] = filter_var($_POST['producto_cantidad'], FILTER_SANITIZE_NUMBER_INT);

echo "<br><br>";
try {
    $nuevo_usuario = new Productos($_POST);
    $usuario = $nuevo_usuario->guardar();

    $resultado = [
        'mensaje' => 'PRODUCTO GUARDADO EN LA BASE DE DATOS',
        'codigo' => 1,
    ];
} catch (Exception $e) {
    $resultado = [
        'mensaje' => 'PRODUCTO NO REGISTRADO, REVISA TU CONEXION',
        'detalle' => $e->getMessage(),
        'codigo' => 0,
    ];
}

$colores = ['danger', 'success'];
?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="alert alert-<?= $colores[$resultado['codigo']] ?> text-center" role="alert" style="font-weight: bold;">
                <h3><?= $resultado['mensaje'] ?></h3>
            </div>
        </div>
    </div>
</div>

<?php
include_once '../../views/templates/footer.php';
?>