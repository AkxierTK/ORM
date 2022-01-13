<?php
include "vendor/autoload.php";
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule=new Capsule;
$capsule->addConnection([
    'driver'=>'mysql',
    'host'=>'dbe97c58b8d5',
    'database'=>'dwes',
    'username'=>'guille',
    'password'=>'1234',
    'charset'=>'utf8',
    'collation'=>'utf8_unicode_ci',
    'prefix'=>'',]);
    // Permite el acceso mediante métodos estáticos
    $capsule->setAsGlobal();
    // Carga el framework
    $capsule->bootEloquent();