<?php
include "db.php";
$db =  connect();
$query=$db->query("select * from continente");
$countries = array();
while($r=$query->fetch_object()){ $countries[]=$r; }


?>
<!DOCTYPE html>
<html>
<head>
	<title>Combo 3 Niveles - BaulPHP</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


</head>
<body>
<BR>
 <div class="container">
<div class="panel panel-default">


<nav class="navbar navbar-default">
 
    <!-- Extra para moviles mostrar -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./">BAULPHP</a>
    </div>

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
<h1>Combobox anidados de 3 niveles</h1>
<?php if(isset($_COOKIE["comboadd"])):?>
<p class="alert alert-success">Combo Agregado exitosamente!</p>
<?php setcookie("comboadd",0,time()-1); endif; ?>
</div>
</div>
<div class="row">
<div class="col-md-6">
<form method="post" action="Agregar.php?opt=all">
  <div class="form-group">
    <label for="name1">Continente</label>
    <select id="continente_id" class="form-control" name="continente_id" required>
      <option value="">-- SELECCIONE --</option>
<?php foreach($countries as $c):?>
      <option value="<?php echo $c->id; ?>"><?php echo $c->name; ?></option>
<?php endforeach; ?>
    </select>
  </div>

  <div class="form-group">
    <label for="name1">Pais</label>
    <select id="pais_id" class="form-control" name="pais_id" required>
      <option value="">-- SELECCIONE --</option>
   </select>
  </div>

  <div class="form-group">
    <label for="name1">Ciudad</label>
    <select id="ciudad_id" class="form-control" name="ciudad_id" required>
      <option value="">-- SELECCIONE --</option>
   </select>
  </div>

  <button type="submit" class="btn btn-default">Agregar Registro</button>
</form>
</div>
</div>
</div>

 <div class="panel-footer">BaulPHP</div>
</div><!-- /.Cierra-default-panel -->
</div><!-- /.container-fluid -->


<script type="text/javascript">
	$(document).ready(function(){
		$("#continente_id").change(function(){
			$.get("Paises.php","continente_id="+$("#continente_id").val(), function(data){
				$("#pais_id").html(data);
				console.log(data);
			});
		});

		$("#pais_id").change(function(){
			$.get("Ciudades.php","pais_id="+$("#pais_id").val(), function(data){
				$("#ciudad_id").html(data);
				console.log(data);
			});
		});
	});
</script>

</body>
</html>