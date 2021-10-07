<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produitfemme extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    public function marque()
    {
        return $this->belongsTo(marque::class);
    }
}
