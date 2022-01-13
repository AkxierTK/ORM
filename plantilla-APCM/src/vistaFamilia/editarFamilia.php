<?php

use Dwes\ORM\Familia;
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
    <h1>Editar Familia</h1>
    <form method="POST" action="../actionFamilia/editarFamilia.php?">
        <label for="nombre">Nombre</label>
        <input type="text"  name="nombre" value="<?=$familia->nombre?>" require>
        <input type="hidden" name="cod" value="<?=$familia->cod?>">
        <button type="submit">Enviar</button>
    </form> 
</body>
</html>