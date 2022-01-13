<?php
namespace Dwes\ORM;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model {
    protected $table='familia';
    protected $primaryKey='cod';
    protected $keyType = 'string';
    public $timestamps=false;
}
