<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['title', 'user_id'];

    public function users()
    {
        return $this->belongsTo(App\User::class);
    }
}
