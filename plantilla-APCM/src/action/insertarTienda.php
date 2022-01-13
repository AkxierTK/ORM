<?php

use Dwes\ORM\Tienda;

include "../eloquent.php";

$tienda=new Tienda();
$tienda->nombre=$_POST["nombre"];
$tienda->tlf=$_POST["tel"];
$tienda->save();

header("Location: ../vista/listadoTiendas.php");
