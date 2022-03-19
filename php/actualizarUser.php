<?php
require_once 'conexion.php';
$connect =  connect();
$id = $_REQUEST['id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$pass = $_POST['password'];
$curso = $_POST['curso'];

$sql="UPDATE users SET nombres='$nombres',
                       apellidos='$apellidos',
                       correo='$email',
                       password='$pass',
                       curso_cargo='$curso'
                       WHERE id = '$id'";
$execute=mysqli_query($connect, $sql)or die(mysqli_error($connect));

?>

<script type="text/javascript">
alert("Se guardo con exito!");
window.location.href='../vista/opciones.php';
</script>