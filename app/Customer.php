<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $attributes = [
        'active' => 1
    ];

    public function getActiveAttribute($value)
    {
        return $this->status()[$value];
    }

    public function status(){
        return [
            0 => 'Inactive',
            1 => 'Active',
        ];
    }

    protected $fillable = [
        'name', 'email', 'active', 'company_id'
    ];

    protected $casts = [
        'active' => 'integer',
        'company_id' => 'integer'
    ];

    public function scopeActive($query, $arg)
    {
        return $query->where('active', $arg);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
