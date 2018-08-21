<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleCapability extends Model
{
    //
    protected $table = 'role_capabilities';

    protected $fillable = ['role_id','capability_id'];
    
}
