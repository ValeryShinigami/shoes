<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produits extends Model
{
    //variable static qui va stocker le taux de tva

    private static $tva = 1.2;

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

    //fonction pour le calcul du prix en TTC
    public function prixTTC()
    {
       $prix_TTC = $this->prixHT * self::$tva;

       return number_format($prix_TTC, 2);
    }
}
