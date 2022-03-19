<?php 
require_once 'conexion.php';

$connect=connect();
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

$sql = "INSERT INTO notas(alumno, curso, materia, tareas, trab_individual, trab_grupal, lecciones, prueba_parcial, suma, promedio)
 VALUES('$nombres', '$curso', '$materia', '$tareas', '$individual', '$grupal', '$lecciones', '$prueba', '$suma', '$promedio' ) ";
 $execute=mysqli_query($connect, $sql)or die(mysqli_error($connect));
?>
<script type="text/javascript">
alert("Se guardo con exito!");
window.location.href='../vista/home.php';
</script>