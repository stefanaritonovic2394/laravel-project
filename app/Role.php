<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $roles = [
        'id' => [
            1 => 'admin',
            2 => 'user',
            3 => 'customer'
        ]
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user');
    }

    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'customer_role');
    }
}
