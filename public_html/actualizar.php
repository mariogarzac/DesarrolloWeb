<?php 
    include("conexion.php");
    $con=conectar();

$numAct=$_GET['id'];

$sql="SELECT * FROM actividad WHERE numAct='$numAct'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="numAct" value="<?php echo $row['numAct']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                                Fecha de Inicio: <input type="date" name="fechaInicio" value="<?php echo date ('Y-m-d'); ?>" />
                                Fecha de Cierre: <input type="date" name="fechaCierre" value="<?php echo date('Y-m-d') ; ?>" />
                                <input type="text" class="form-control mb-3" name="horasRegistradas" placeholder="Horas Registradas" value="<?php echo $row['horasRegistradas']  ?>">
                                <input type="text" class="form-control mb-3" name="ID_asilo" placeholder="ID del Asilo" value="<?php echo $row['ID_asilo']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>