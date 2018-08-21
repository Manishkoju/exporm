<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'roles';

    protected $fillable = ['name','slug','status'];

    public function users()
    {
     return $this->belongsToMany('App\User');
    }

    public function capabilities()
    {
     return $this->belongsToMany('App\Models\Capability');
    }

}
