<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produits extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function marque()
    {
        return $this->belongsTo(marque::class);
    }

    public function tag()
    {
        return $this->belongsToMany(tag::class);
    }
}
