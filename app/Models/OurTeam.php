<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    protected $table = 'our_team';

    protected $fillable = [
        'position',
        'is_active',
        'sort_order',
        'team_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'team_id');
    }
}
