<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","prueba");

$consulta="SELECT*FROM tabla where usuario='$usuario' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //administrador
    header("location:admin.php");

}else
if($filas['id_cargo']==2){ //cliente
header("location:cliente.php");
}
else{
    ?>
    <?php
    include("../Empezar.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}

if($filas['id_cargo']==3){ //director
    header("location:director.php");

}else


mysqli_free_result($resultado);
mysqli_close($conexion);
