<!DOCTYPE Html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Proyecto final desarrollo de apps web">
  <meta name="author" content="Equipo 6">
  <link rel="stylesheet" href="app/navbar.css">
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
        <li><a href="asilos.html">Asilos</a></li>
        <li><a href="voluntariado.html">Voluntariados</a></li>
        <li><a href="index.html">Inicio</a></li>
      </div>
    </ul>
  </div>
  <h1> hola desde Asilos</h1>
</body>
<div class="card" style="width: 18rem;float:left;margin-top:20px;margin-left:20px;border-color:white;border-width:5px;">

  <div class="card-block">
    <img style="height:250px;width:100%;" src="<?php echo $data['icon']; ?>" alt="Card image cap">
    <div>
      <h1 class="card-title">
        <?php echo $data['name']?><span style="color:#5aff28;float:right">
          <?php echo $data['level']; ?>
        </span>
      </h1>
      <h5 class="card-subtitle mb-2 text-muted">
        <?php echo $data['category']; ?>
      </h5>
      <p class="card-text">
        <?php echo $data['description']; ?>
      </p>
      <a href="<?php echo $data['link']; ?>" class="card-link">Link</a>
      <a href="<?php echo $data['developer_link']; ?>" class="card-link">Developer Profile</a>

      <form method="post">

        <div style="width:200;float:left;margin-top:5px" class="form-group">
          <input type="text" class="form-control" id="code" name="code" placeholder="Enter Code">
        </div>

      </form method="post">
      <a href="" name="code_btn" class="btn btn-success">Enter</a>
    </div>

    <body>

    </body>

</html>