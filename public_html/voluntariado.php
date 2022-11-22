<?php
  include("conexion.php");
  $con=conectar();

  $sql="SELECT * FROM actividad";
  $query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <title> PAGINA Voluntariado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        
        <link rel="stylesheet" href="app/navbar.css">
        
    </head>
    <body>
      <div class="navbar">
          <ul>
            <li ><h1 class="logo"> Busca Asilos </h1></li>
            <div class="navbar_item">
              <li ><a  href="contacto.html">Contacto</a></li>
              <li ><a  href="asilos.php">Asilos</a></li>
              <li ><a  href="voluntariado.php">Voluntariados</a></li>
              <li ><a  href="index.html">Inicio</a></li>
            </div>
          </ul>
      </div>
  </body>
    <body>
            <div class="container mt-1">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="numAct" placeholder="Numero de Act">
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    Fecha de Inicio: <input type="date" name="fechaInicio" value="<?php echo date ('Y-m-d'); ?>" />
                                    <br>Fecha de Cierre: <input type="date" name="fechaCierre" value="<?php echo date('Y-m-d') ; ?>" />
                                    <input type="text" class="form-control mb-3" name="horasRegistradas" placeholder="Horas para Acreditar">
                                    <input type="text" class="form-control mb-3" name="ID_asilo" placeholder="Asilo">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Numero Act</th>
                                        <th>Nombre</th>
                                        <th>FechaInicio</th>
                                        <th>FechaCierre</th>
                                        <th>HorasRegistradas</th>
                                        <th>ID_asilo</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['numAct']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['fechaInicio']?></th>
                                                <th><?php  echo $row['fechaCierre']?></th>
                                                <th><?php  echo $row['horasRegistradas']?></th>
                                                <th><?php  echo $row['ID_asilo']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['numAct'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['numAct'] ?>" class="btn btn-danger">Eliminar</a></th>       
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>