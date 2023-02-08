<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Tag, Categorie, User};

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'category_id', 'slug', 'title', 'description', 'status', 'slug', 'post_viewcount', 'date'];

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function category(){
        return $this->belongsTo(Categorie::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
