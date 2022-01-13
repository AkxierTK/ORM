<?php
include "../action/listarTiendas.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Tiendas                              <a href="altaTienda.php">Alta Tienda</a></h1>
    <?php
        $salida="<ul>";
        foreach($tiendas as $tienda){
            $salida.="<li> ";
            $salida.= $tienda->nombre." <a href='../action/cargarTienda.php?cod=".$tienda->cod."'>Editar</a> <a href='../action/borrarTienda.php?cod=".$tienda->cod."'>Borrar</a></li>";
        }
        $salida.="</ul>";
        echo $salida;
    ?>
</body>
</html>