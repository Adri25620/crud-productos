<?php
include_once '../templates/header.php';
?>
<br><br>
<div class="container justify-content-center mt-3">
    <div class="row">
        <div class="col">
            <h1 class="text-center mb-2" style="color: tomato;">BIENVENIDO A TU TIENDA</h1>
            <h2 class="text-center mb-2" style="color: tomato;">REGISTRA TU NUEVO PRODUCTO</h2>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6">

            <form action="../../controller/registro/guardar.php" method="POST" class="form-control">

                <div class="row mb-3">
                    <label for="producto_nombre">Nombre del nuevo producto: </label>
                    <input type="text" name="producto_nombre" class="form-control" placeholder="Nombre..." required>
                </div>

                <div class="row mb-3">
                    <label for="producto_precio">Precio del producto: </label>
                    <input type="text" name="producto_precio" class="form-control" placeholder="Precio..." required>
                </div>

                <div class="row mb-3">
                    <label for="producto_cantidad">Cantidad a registrar: </label>
                    <input type="number" name="producto_cantidad" class="form-control" placeholder="Cantidad..." required>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-3 text-center">
                        <button type="submit" class="btn" style="background-color: red; color: white;">INGRESAR</button>
                    </div>
                </div>
        </div>
    </div>

    </form>
</div>

<?php
include_once '../templates/footer.php';
?>
