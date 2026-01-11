<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'group_class';

    protected $fillable = [
        'title',
        'made_by',
        'teacher',
        'color',
    ];

    public function maker()
    {
        return $this->belongsTo(User::class, 'made_by');
    }

    public function teacherUser()
    {
        return $this->belongsTo(User::class, 'teacher');
    }
}
