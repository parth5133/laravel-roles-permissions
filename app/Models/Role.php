<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasPermissions;

class Role extends Model
{

    use HasPermissions;
    protected $fillable = ['name']; // Add 'name' to the fillable array

    // // Role model
    // public function permissions()
    // {
    //     return $this->belongsToMany(Permission::class);
    // }
    public function role_has_permissions()
    {
        return $this->hasMany(RoleHasPermission::class);
    }
}
