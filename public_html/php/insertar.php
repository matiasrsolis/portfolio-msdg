<?php

include("conexion.php");
if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
   isset($_POST['pw']) && !empty($_POST['pw'])){
    
    $con = mysql_connect($host,$user,$pw)or die("Problemas al conectar.");
    mysql_select_db($db,$con)or die("Problemas al conectar la base de datos.");
    
    mysql_query("INSERT INTO CodigoF (NOMBRE,PW) VALUES ('$_POST[nombre]','$_POST[pw]')",$con);
    echo "Datos insertados";
}else{
    echo "Problemas al insertar datos.";
}

?>