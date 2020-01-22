<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['title', 'description', 'image_path', 'user_id', 'category_id'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
