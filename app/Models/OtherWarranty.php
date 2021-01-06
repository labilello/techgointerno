<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherWarranty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phones', 'emails', 'pages'
    ];

    protected $casts = [
        'phones' => 'array',
        'emails' => 'array',
        'pages' => 'array',
    ];
}
