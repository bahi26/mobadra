<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Supporter extends Model
{
    protected $table='supporters';
    public $primaryKey='user_id';
    public $timestamps=true;

}