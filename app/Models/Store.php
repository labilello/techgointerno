<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name', 'address', 'phones'
    ];

    protected $casts = [
        'phones' => 'array'
    ];

    public function store() {
        return $this->hasMany('App\Models\User');
    }

}
