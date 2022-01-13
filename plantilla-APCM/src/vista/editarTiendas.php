
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Tienda</h1>
    <form method="POST" action="../action/editarTienda.php?">
        <label for="nombre">Nombre</label>
        <input type="text"  name="nombre" value="<?=$tienda->nombre?>" require>
        <br>
        <label for="tel">Teléfono</label>
        <input type="tel" name="tel" value="<?=$tienda->tlf?>" require>
        <button type="submit">Enviar</button>
        <input type="hidden" name="cod" value="<?=$tienda->cod?>">
    </form> 
</body>
</html>