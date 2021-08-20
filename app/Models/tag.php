<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tag extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function produits()
    {
        return $this->belongsToMany(produits::class);
    }


    
}
