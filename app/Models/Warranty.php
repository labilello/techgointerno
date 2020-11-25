<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Warranty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'warranty_group_id', 'devices', 'actions', 'documents', 'externalContact', 'internalLinks'
    ];

    protected $casts = [
        'devices' => 'array',
        'actions' => 'array',
        'documents' => 'array',
        'externalContact' => 'array',
        'internalLinks' => 'array',
    ];

    public function internalContacts() {
        return $this->belongsToMany('App\Models\User', 'user_warranty', 'warranty_id', 'user_id');
    }

    public function warrantyGroup() {
        return $this->belongsTo('App\Models\WarrantyGroup');
    }

}
