
<!--query para consulta de datos de usuario registrado  -->
<?php   

$nombre = $_REQUEST['name'];
//$apellidos = $_REQUEST['lastname'];
//$usuario = $_REQUEST['user'];
//$correo = $_REQUEST['mail'];
//$clave = $_REQUEST['pass'];


$conexion = mysqli_connect("localhost", "root","", "regconexion") or die ("error al conectar");


$registros = mysqli_query($conexion, "SELECT nombre, apellidos, usuario, correo, clave FROM usuarios WHERE 
nombre = '$nombre' ") or die ("problemas con la consulta"); 

while($reg = mysqli_fetch_array($registros)){
 echo "nombre:". $reg['nombre'] ."<br>";
 echo "apellidos:". $reg['apellidos'] ."<br>";
 echo "usuario:". $reg['usuario'] ."<br>";
 echo "correo:". $reg['correo'] ."<br>";
 echo "clave:". $reg['clave'] ."<br>";


echo "<br><br>";

}
mysqli_close($conexion);

?>