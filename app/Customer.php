<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $attributes = [
        'active' => 0
    ];

    protected $fillable = [
        'name', 'email', 'active', 'company_id'
    ];

    public function scopeActive($query, $arg)
    {
        return $query->where('active', $arg);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
