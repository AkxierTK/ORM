<?php

use Dwes\ORM\Tienda;

include "../eloquent.php";

$tienda=Tienda::find($_GET["cod"]);
$tienda->delete();

header("Location: ../vista/listadoTiendas.php");