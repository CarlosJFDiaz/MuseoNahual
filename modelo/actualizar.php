<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tienda</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <!-- Bootstrap icons-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/estilost.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="../css/estilost.css" rel="stylesheet" />
    <link href="../css/cabecera.css" rel="stylesheet" />
    <link href="../css/footer.css" rel="stylesheet" />
    <link href="../css/estilos.css" rel="stylesheet" />
    <style>
        body{
            color:rgb(0, 177, 59);
        }
        </style>
</head>
<body>
<?php
include_once("../cabecera.html");
?>

<br>
<?php
include_once("menuadmin.php");
?>
<br>

<!-- form -->
<?php $conexion=mysqli_connect('localhost','root','','tienda'); ?>


<?php 
		$sql="SELECT * from productos where $Id='id'";

		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
        
		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['descripcion'] ?></td>
			<td><?php echo $mostrar['precio_normal'] ?></td>
			<td><?php echo $mostrar['precio_rebajado'] ?></td>
			<td><?php echo $mostrar['cantidad'] ?></td>
            <td><?php echo $mostrar['imagen'] ?></td>
            <td><?php echo $mostrar['id_categoria'] ?></td>
            <td>
				<input type="submit" name="Submit" value="Modificar" >
			</td>
		</tr>
	<?php 
	}
	 ?>

<!-- new -->

<?php
include_once("../pie.html");
?>

</body>

</html>