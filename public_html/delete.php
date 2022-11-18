<?php

include("conexion.php");
$con=conectar();

$numAct=$_GET['id'];

$sql="DELETE FROM actividad  WHERE numAct='$numAct'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: voluntariado.php");
    }
?>