<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Location  extends Model
{
    protected $table='gmaps_geocache';
    public $primaryKey='id';
    public $timestamps=true;
}
