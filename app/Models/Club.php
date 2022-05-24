<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, UserClub::class, 'club_id', 'user_id');
    }

    public function announcements()
    {
        return $this->hasMany(ClubAnnouncement::class);
    }
}
