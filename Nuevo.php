<?php
include "db.php";
$db =  connect();
$query=$db->query("select * from continente");
$countries = array();
while($r=$query->fetch_object()){ $countries[]=$r; }

$query=$db->query("select * from pais");
$states = array();
while($r=$query->fetch_object()){ $states[]=$r; }

?>
<!DOCTYPE html>
<html>
<head>
  <title>First_System</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>


</head>
<body>
<div class="container">
<div class="panel panel-default">


<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./">BAULPHP</a>
    </div>

    <!-- Coleccion de etiquetas nav links, forms, y otros contenidos -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="./">INICIO <span class="sr-only">(current)</span></a></li>
        <li ><a href="./Nuevo.php">AGREGAR REGISTROS</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
</nav>


<div class="panel-body">
<div class="row">
<div class="col-md-12">
<h1>Agregar Datos</h1>
<?php if(isset($_COOKIE["countryadd"])):?>
<p class="alert alert-success">Pais Agregado exitosamente!</p>
<?php setcookie("countryadd",0,time()-1); endif; ?>
<?php if(isset($_COOKIE["stateadd"])):?>
<p class="alert alert-info">Estado Agregado exitosamente!</p>
<?php setcookie("stateadd",0,time()-1); endif; ?>
<?php if(isset($_COOKIE["cityadd"])):?>
<p class="alert alert-warning">Ciudad Agregada exitosamente!</p>
<?php setcookie("cityadd",0,time()-1); endif; ?>

</div>
</div>
<div class="row">
<div class="col-md-4">
<h3>Nuevo Continente</h3>
<form method="post" action="Agregar.php?opt=country">
  <div class="form-group">
    <label for="name1">Nombre</label>
    <input type="text" class="form-control" id="name1" name="name" placeholder="Nombre" required>
  </div>
  <button type="submit" class="btn btn-default">Agregar Registro</button>
</form>
</div>
<div class="col-md-4">
<h3>Nuevo Pais</h3>
<form method="post" action="Agregar.php?opt=state">
  <div class="form-group">
    <label for="name1">Continente</label>
    <select class="form-control" name="continente_id" required>
      <option value="">-- SELECCIONE --</option>
<?php foreach($countries as $c):?>
      <option value="<?php echo $c->id; ?>"><?php echo $c->name; ?></option>
<?php endforeach; ?>
    </select>
  </div>

  <div class="form-group">
    <label for="name1">Nombre</label>
    <input type="text" class="form-control" id="name1" name="name" placeholder="Nombre" required>
  </div>
  <button type="submit" class="btn btn-default">Agregar Registro</button>
</form>
</div>
<div class="col-md-4">
<h3>Nueva Ciudad</h3>
<form method="post" action="Agregar.php?opt=city">
  <div class="form-group">
    <label for="name1">Pais</label>
    <select class="form-control" name="pais_id" required>
      <option value="">-- SELECCIONE --</option>
<?php foreach($states as $c):?>
      <option value="<?php echo $c->id; ?>"><?php echo $c->name; ?></option>
<?php endforeach; ?>
    </select>
  </div>

  <div class="form-group">
    <label for="name1">Nombre</label>
    <input type="text" class="form-control" id="name1" name="name" placeholder="Nombre" required>
  </div>
  <button type="submit" class="btn btn-default">Agregar Registro</button>
</form>
</div>
</div>
</div>

 <div class="panel-footer">BaulPHP</div>
</div><!-- /.Cierra-default-panel -->
</div><!-- /.container-fluid -->
</body>
</html>