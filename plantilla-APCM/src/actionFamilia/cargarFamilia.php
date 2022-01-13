<?php

use Dwes\ORM\Familia;
use Dwes\ORM\Tienda;

include "../eloquent.php";

$familia=Familia::find($_GET["cod"]);


include "../vistaFamilia/editarFamilia.php";