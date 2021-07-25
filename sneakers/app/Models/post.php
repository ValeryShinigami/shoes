<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{
    use HasFactory;
    use Sluggable;
    protected $guarded = [];
    protected $dates = ["created_at", "updated_at", "deleted_at", "published_at"];  
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    

    public function homme()
    {
        return $this->belongsTo(Homme::class);
    }
}
