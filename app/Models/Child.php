<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $table = 'children';

    protected $fillable = [
        'parent_user_id',
        'name',
        'gender',
        'date_of_birth',
        'level',
        'tpalama',
        'pendampingan',
        'saran',
        'status',
        'progress_iqro',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'tpalama' => 'boolean',
        'pendampingan' => 'boolean',
    ];

    public function parentUser()
    {
        return $this->belongsTo(User::class, 'parent_user_id');
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'child_id');
    }
}
