<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';

    protected $fillable = [
        'title',
        'content',
        'cover',
        'made_by',
    ];

    public function author(){
        return $this->belongsTo(User::class, 'made_by');
    }
}
