<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function scopeActive($query, $arg)
    {
        return $query->where('active', $arg);
    }
}
