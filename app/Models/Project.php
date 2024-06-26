<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'type',
        'area',
        'city',
        'country',
        'surface',
        'year',
        'usage',
        'maitre_doeuvre',
        'maitre_douvrage',
        'description',
    ];

    //add more images
    public function images()
    {
        return $this->hasMany('App\Models\ProjectImages');
    }
}
