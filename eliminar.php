
<!--query para eliminar usuario registrado -->
<?php   

$nombre = $_REQUEST['name'];



$conexion = mysqli_connect("localhost", "root","", "regconexion") or die ("error al conectar");


$registros = mysqli_query($conexion, "SELECT nombre, apellidos, usuario, correo, clave FROM usuarios WHERE 
nombre = '$nombre' ") or die ("problemas con la consulta"); 

if ($reg = mysqli_fetch_array($registros)) {

    mysqli_query($conexion, "DELETE FROM usuarios WHERE nombre = '$nombre'") or die ("problemas al eliminar");

    echo "registro eliminado exitosamente!";
}
else {
    echo "no existe registro con ese nombre";
}

mysqli_close($conexion);

?>