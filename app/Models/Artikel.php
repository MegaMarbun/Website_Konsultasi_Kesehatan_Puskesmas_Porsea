<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Artikel extends Model
{
    use HasFactory, \Cviebrock\EloquentSluggable\Sluggable;


    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded =['id'];


    public function getRouteKeyName(){
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
}

