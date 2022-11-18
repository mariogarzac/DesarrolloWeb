<?php
include("conexion.php");
$con=conectar();

$numAct=$_POST['numAct'];
$Nombre=$_POST['Nombre'];
$fechaInicio=$_POST['fechaInicio'];
$fechaCierre=$_POST['fechaCierre'];
$horasRegistradas=$_POST['horasRegistradas'];
$ID_asilo=$_POST['ID_asilo'];



$sql="INSERT INTO actividad VALUES('$numAct','$Nombre','$fechaInicio','$fechaCierre', '$horasRegistradas', '$ID_asilo')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: voluntariado.php");
    
}else {
}
?>