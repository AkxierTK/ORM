<?php

use Dwes\ORM\Familia;

include "../eloquent.php";

$familia=Familia::find($_GET["cod"]);
$familia->delete();

header("Location: ../vistaFamilia/listadoFamilia.php");