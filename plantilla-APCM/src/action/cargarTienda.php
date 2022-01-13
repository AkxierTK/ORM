<?php
use Dwes\ORM\Tienda;

include "../eloquent.php";

$tienda=Tienda::find($_GET["cod"]);


include "../vista/editarTiendas.php";