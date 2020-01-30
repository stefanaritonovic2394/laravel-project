<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ROLES = [
        'admin' => ['id' => 1, 'name' => 'admin'],
        'user' => ['id' => 2, 'name' => 'user'],
        'customer' => ['id' => 3, 'name' => 'customer']
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user');
    }

    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'customer_role', 'role_id', 'customer_id');
    }
}
