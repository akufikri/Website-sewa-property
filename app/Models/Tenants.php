<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tenants extends Model
{   
    use HasFactory; use SoftDeletes;
    protected $fillable = [
    'id',
    'name', 
    'email', 
    'property_id'
    ];
    protected $table = 'tenants';

    public function property(){
        return $this->belongsTo(Property::class, 'property_id');
    }
   
}