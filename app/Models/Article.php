<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['title', 'description', 'image_path', 'user_id', 'category_id'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'article_category', 'article_id', 'category_id', 'id', 'id');
    }
}
