<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function Permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function assign(Permission $permission)
    {
        return $this->permissions()->save($permission);
    }
}
