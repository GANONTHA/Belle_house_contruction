<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogImages extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'blog_id'];
    public function project()
    {
        return $this->belongsTo('App\Models\Blog');
    }
}
