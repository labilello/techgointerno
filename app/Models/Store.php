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

    public function users() {
        return $this->hasMany('App\Models\User');
    }

    public function photos() {
        return $this->hasMany('App\Models\Photo');
    }

}
