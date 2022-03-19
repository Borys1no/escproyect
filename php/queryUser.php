<?php
require_once 'conexion.php';
$conecct=connect();

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$password = sha1($_POST['password']);
$curso = $_POST['curso'];

$query="INSERT INTO users(nombres, apellidos, correo, password, curso_cargo)
            VALUES('".$nombres."', '".$apellidos."', '".$email."', '".$password."', '".$curso."')";
mysqli_query($conecct, $query) or die(mysqli_error($conecct));


?>
<script type="text/javascript">
alert("Registro con exito!");
window.location.href='../vista/opciones.php';
</script>