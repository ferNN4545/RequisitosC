
<?php
include 'index.php';
include 'conexion.php';
?>

<div class= "container">
<!-- Default form subscription -->
<form class="text-center border border-light p-5" action="registrarFac.php" method="POST">

    <p class="h4 mb-4">Registro de facultades</p>

    <p>Registra una nueva facultad</p>

    <p>
        <a href="" target="_blank">Ver las facultades registradas</a>
    </p>

    <!-- Name -->
    <input type="text" id="codigoFac" name="codigoFac" class="form-control mb-4" placeholder="Codigo">

    <!-- Email -->
    <input type="text" id="nombreFac" name="nombreFac" class="form-control mb-4" placeholder="Nombre">

    <!-- Sign in button -->
    <button class="btn btn-info btn-block" type="submit">Enviar</button>


</form>
<!-- Default form subscription -->

</div>