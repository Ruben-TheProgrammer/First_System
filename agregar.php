<?php

include "db.php";

if(isset($_GET["opt"]) && $_GET["opt"]=="country"){
	$con = connect();
	$con->query("insert into continente(name) value (\"$_POST[name]\")");
	setcookie("countryadd",1);
	header("Location: Nuevo.php");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="state"){
	$con = connect();
	$con->query("insert into pais(name,continente_id) value (\"$_POST[name]\",$_POST[continente_id])");
	setcookie("stateadd",1);
	header("Location: Nuevo.php");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="city"){
	$con = connect();
	$con->query("insert into ciudad(name,pais_id) value (\"$_POST[name]\",$_POST[pais_id])");
	setcookie("cityadd",1);
	header("Location: Nuevo.php");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="all"){
	$con = connect();
	$con->query("insert into combo(continente_id,pais_id,ciudad_id) value ($_POST[continente_id],$_POST[pais_id],$_POST[ciudad_id])");
	setcookie("comboadd",1);
	header("Location: index.php");
}
?>