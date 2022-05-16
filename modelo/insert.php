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
    <link href="css/estilost.css" rel="stylesheet" />
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

<section id="bienvenidos">
                <div class="group" align="center">
                    <form name="registro" method="post" action="insert_r.php">
                    <h2><em>Agregar producto</em></h2> <br> 
                       
                        <label for="Id">Id del producto<span><em>(requerido)</em></span></label>
                        <input type="int" name="id" class="form-input" required/> 
                        <br><br>  
                        
                        <label for="Nombre">Nombre del producto <span><em>(requerido)</em></span></label>
                        <input type="varchar" name="nombre" class="form-input" required/> 
                        <br><br>

                        <label for="Descripcion">Descripción <span><em>(requerido)</em></span></label>
                        <input type="text" name="descripcion" class="form-input" required/> 
                        <br><br>
                          
                        <label for="Precio_normal">Precio normal <span><em>(requerido)</em></span></label>
                        <input type="float" name="precio_n" class="form-input" required/> 
                        <br><br>

                        <label for="Precio_rebajado">Precio rebajado <span><em>(requerido)</em></span></label>
                        <input type="float" name="precio_r" class="form-input" />
                        <br><br>

                        <label for="Cantidad">Cantidad <span><em>(requerido)</em></span></label>
                        <input type="int" name="cantidad" class="form-input" required/> 
                        <br><br>

                        <label for="Imagen">Nombre de imágen <span><em>(requerido)</em></span></label>
                        <input type="varchar" name="imagen" class="form-input" />
                        <br><br>

                        <label for="Id_categoria">Categoría <span><em>(requerido)</em></span></label>
                        <input type="int" name="id_categoria" class="form-input" />
                        <br><br>

                       <left> <input name="boton" type="submit" value="Agregar Producto" /></left><br><br>
                      </p>
                    </form>
                  </div><br>
                
                <p><br>
                </p> 
            </section>


<?php
include_once("../pie.html");
?>

</body>

</html>