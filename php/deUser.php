<?php 
require_once 'conexion.php'; 
$connect = connect();
$id = $_REQUEST['id'];
$delete = "DELETE FROM users WHERE id='$id'";
$execute = mysqli_query($connect, $delete) or die(mysqli_error($connect));
header('location:../vista/opciones.php');
?>