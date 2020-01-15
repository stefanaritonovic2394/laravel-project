<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'email', 'active'
    ];

    public function scopeActive($query, $arg)
    {
        return $query->where('active', $arg);
    }
}
