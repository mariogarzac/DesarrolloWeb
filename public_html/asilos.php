<?php
  include("conexion.php");
  $con=conectar();

  $sql="SELECT * FROM asilo";
  $query=mysqli_query($con,$sql);

?>
<!DOCTYPE Html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Proyecto final desarrollo de apps web">
  <meta name="author" content="Equipo 6">
  <link rel="stylesheet" href="app/navbar.css">
  <link rel="stylesheet" href="app/asilo.css">
  <title> Busca Asilos </title>
</head>

<body>
  <div class="navbar">
    <ul>
      <li>
        <h1 class="logo"> Busca Asilos </h1>
      </li>
      <div class="navbar_item">
        <li><a href="contacto.html">Contacto</a></li>
        <li><a href="asilos.php">Asilos</a></li>
        <li><a href="voluntariado.php">Voluntariados</a></li>
        <li><a href="index.html">Inicio</a></li>
      </div>
    </ul>
  </div>
</body>
<body>
<?php
     while($row=mysqli_fetch_array($query)){
?>
  <div class="card" >
  <img src="https://canitas.mx/wp-content/uploads/2021/03/Asilos-para-ancianos-gratuitos.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b><?php  echo $row['Nombre']?></b></h4>
    <p><?php  echo $row['Telefono']?></p>
    <p><?php  echo $row['Direccion']?></p>
  </div>
</div>
<?php 
  }
?>

</body>


</html>