<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $fillable = [
        'image', 'title', 'description',
    ];

    public function images()
    {
        return $this->hasMany('App\Models\ServiceImage');
    }
}
