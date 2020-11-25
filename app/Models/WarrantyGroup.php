<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarrantyGroup extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['name'];

    public function warranties(){
        return $this->hasMany('App\Models\Warranty');
    }
}
