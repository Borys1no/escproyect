<?php
require_once 'conexion.php';
$connect =  connect();
$id = $_REQUEST['id'];
$nombres = $_POST['nombres'];
$curso = $_POST['curso'];
$materia = $_POST['materia'];
$tareas = $_POST['tareas'];
$individual = $_POST['individual'];
$grupal = $_POST['grupal'];
$lecciones = $_POST['lecciones'];
$prueba = $_POST['prueba'];
$suma = $_POST['suma'];
$promedio = $_POST['promedio'];

$query = "UPDATE notas SET alumno='$nombres', curso='$curso', materia='$materia', tareas='$tareas', trab_individual='$individual', trab_grupal='$grupal', lecciones='$lecciones', prueba_parcial='$prueba', suma='$suma', promedio='$promedio' WHERE id='$id'  ";
$execute = mysqli_query($connect, $query)or die(mysqli_error($connect));

?>

<script type="text/javascript">
alert("Se guardo con exito!");
window.location.href='../vista/home.php';
</script>