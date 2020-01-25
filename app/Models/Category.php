<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['title', 'user_id'];

    /**
     * Undocumented function
     *
     * @return void
     */
    public function users()
    {
        return $this->belongsTo(App\User::class);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
