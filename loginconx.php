
<!--query para login de usuario -->
<?php

$host="localhost";
$user="root";
$pw="";
$db="regconexion";

session_start();
if(isset($_POST['correo']) && !empty($_POST['correo']) && 
isset($_POST["clave"]) && !empty($_POST["clave"]))
{
    $con = mysqli_connect($host,$user,$pw,)or die("problemas al conectar");
mysqli_select_db($con,$db)or die("problemas al conectar la bd");

$sel = mysqli_query($con,"SELECT correo,clave FROM usuarios WHERE correo ='$_POST[correo]'"); 

$sesion = mysqli_fetch_array($sel);

if($_POST['clave'] == $sesion['clave'])
{
    $_SESSION['username'] = $_POST['correo'];
    echo "sesion exitosa";
}else{
    echo "combinacion erronea";
}

}else{
    echo "debes llenar todos los campos";
    }

?>
<?php include("admin.html")?>
