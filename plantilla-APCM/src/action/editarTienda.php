<?php
use Dwes\ORM\Tienda;

include "../eloquent.php";


$cod=$_POST["cod"];
$nombre=$_POST["nombre"];
$tel=$_POST["tel"];
$tienda=Tienda::find($cod);
$tienda->nombre=$nombre;
$tienda->tlf=$tel;
$tienda->save();

header("Location: ../vista/listadoTiendas.php");