<!--query para editar registro de usuario   -->
<?php

$host="localhost";
$user="root";
$pw="";
$db="regconexion";


$con = mysqli_connect($host,$user,$pw,)or die("problemas al conectar");
mysqli_select_db($con,$db)or die("problemas al conectar la bd");
mysqli_query($con,"UPDATE usuarios set usuario = '$_POST[nuevo]'
 WHERE usuario = '$_POST[viejo]'") or die (mysqli_error());

 echo "actualizacion correcta"
 

?>