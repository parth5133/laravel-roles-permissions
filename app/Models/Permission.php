<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    // Disable Laravel's mass assignment protection
    protected $guarded = [];

    /**
     * The roles that belong to the permission.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}