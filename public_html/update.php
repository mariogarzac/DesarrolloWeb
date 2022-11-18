<?php

include("conexion.php");
$con=conectar();

$numAct=$_POST['numAct'];
$Nombre=$_POST['Nombre'];
$fechaInicio=$_POST['fechaInicio'];
$fechaCierre=$_POST['fechaCierre'];
$horasRegistradas=$_POST['horasRegistradas'];
$ID_asilo=$_POST['ID_asilo'];

$sql="UPDATE actividad SET  Nombre='$Nombre',fechaInicio='$fechaInicio', fechaCierre='$fechaCierre', horasRegistradas='$horasRegistradas',ID_asilo='$ID_asilo' WHERE numAct='$numAct'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: voluntariado.php");
    }
?>