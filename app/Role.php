<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user');
    }

    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'customer_role');
    }
}
