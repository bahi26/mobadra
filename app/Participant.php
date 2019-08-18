<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Participant extends Model
{
    protected $table='participants';
    public $primaryKey='user_id';
    public $timestamps=true;

}