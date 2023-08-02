<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{  
        use HasFactory; use SoftDeletes;
    protected $fillable = [
        'id',
        'title',
        'photo',
        'description',
        'rent'
    ];
    protected $table = 'properties';

    public function tenants(){
        return $this->HasMany(Tenants::class);
    }


}