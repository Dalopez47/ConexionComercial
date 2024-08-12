
<!--conexion a base de datos -->
<?php   

    $nombre = $_REQUEST['name'];
    $apellidos = $_REQUEST['lastname'];
    $usuario = $_REQUEST['user'];
    $correo = $_REQUEST['mail'];
    $clave = $_REQUEST['pass'];


    $conexion = mysqli_connect("localhost", "root","", "regconexion") or die ("error al conectar");

    mysqli_query($conexion, "INSERT INTO usuarios (nombre, apellidos, usuario, correo, clave) 
    Values ('$nombre', '$apellidos', '$usuario', '$correo', '$clave')") or die ("problemas con la consulta"); 

    mysqli_close($conexion);

    echo "datos guardados";
?>
