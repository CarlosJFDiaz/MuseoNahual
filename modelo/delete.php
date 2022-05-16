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

<section id="bienvenidos">
                <div class="group" align="center">
                    <form name="registro" method="get" action="delete_r.php">
                    <h2><em>Eliminar producto</em></h2> <br> 
                       
                        <label for="Id">Id del producto<span><em>(requerido)</em></span></label>
                        <input type="int" name="id" class="form-input" required/> 
                        <br><br>  
                        
                        

                       <left> <input name="boton" type="submit" value="Eliminar Producto" /></left><br><br>
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