<?php
include "db.php";
$db=connect();
$query=$db->query("select * from ciudad where pais_id=$_GET[pais_id]");
$states = array();
while($r=$query->fetch_object()){ $states[]=$r; }
if(count($states)>0){
print "<option value=''>-- SELECCIONE --</option>";
foreach ($states as $s) {
	print "<option value='$s->id'>$s->name</option>";
}
}else{
print "<option value=''>-- NO HAY DATOS --</option>";
}
?>