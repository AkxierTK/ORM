<?php
namespace Dwes\ORM;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model {
    protected $table='tienda';
    protected $primaryKey='cod';
    // protected $keyType = 'string';
    public $timestamps=false;
}
