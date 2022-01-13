<?php
include("../actionFamilia/listarFamilia.php");
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
    <h1>Listado de Familias                              <a href="altaFamilia.php">Alta Familias</a></h1>
    <?php
        $salida="<ul>";
        foreach($familias as $familia){
            $salida.="<li> ";
            $salida.= $familia->nombre." <a href='../actionFamilia/cargarFamilia.php?cod=".$familia->cod."'>Editar</a> <a href='../actionFamilia/borrarFamilia.php?cod=".$familia->cod."'>Borrar</a></li>";
        }
        $salida.="</ul>";
        echo $salida;
    ?>
</body>
</html>