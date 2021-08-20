<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $guarded = [];

    private static $tva = 1.2;

    //fonction pour le calcul du prix en TTC
    public function prixTTC()
    {
       $prix_TTC = $this->prixHT * self::$tva; 
       return number_format($prix_TTC, 2);
    }
}
