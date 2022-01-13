<?php

use Dwes\ORM\Familia;

include "../eloquent.php";

$familia=new Familia();
$familia->cod=$_POST["cod"];
$familia->nombre=$_POST["nombre"];
$familia->save();

header("Location: ../vistaFamilia/listadoFamilia.php");
