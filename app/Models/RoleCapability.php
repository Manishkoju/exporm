<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleCapability extends Model
{
    //
    protected $table = 'capability_role';

    protected $fillable = ['role_id','capability_id'];
    
}
