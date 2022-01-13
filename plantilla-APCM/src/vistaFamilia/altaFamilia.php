<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Alta Familia</h1>
    <form method="POST" action="../actionFamilia/insertarFamilia.php?">
        <label for="cod">Codigo</label>
        <input type="text" name="cod" require>
        <br>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" require>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>