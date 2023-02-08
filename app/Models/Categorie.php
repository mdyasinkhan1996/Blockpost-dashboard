<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Post};

class Categorie extends Model
{
    use HasFactory;
    
    protected $fillable =['name', 'status', 'month'];
    
    public function posts(){
        return $this->hasMany(Post::class, 'category_id','id');
    }
}
