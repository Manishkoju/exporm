<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capability extends Model
{
    //
    protected $table = 'capabilities';

    protected $fillable = ['title','status'];
}
