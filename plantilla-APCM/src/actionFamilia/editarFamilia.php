<?php

use Dwes\ORM\Familia;


include "../eloquent.php";


$cod=$_POST["cod"];
$nombre=$_POST["nombre"];
$familia=Familia::find($cod);
$familia->nombre=$nombre;
$familia->save();

header("Location: ../vistaFamilia/listadoFamilia.php");