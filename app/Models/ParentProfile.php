<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentProfile extends Model
{
    protected $table = 'parent_profiles';

    protected $fillable = [
        'user_id',
        'name_father',
        'name_mother',
        'whatsapp',
        'note_admin',
        'note_teacher',
    ];

    public function profile(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
