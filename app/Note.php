<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table='notes';
    public $primaryKey='note_id';
    public $timestamps=true;
}
