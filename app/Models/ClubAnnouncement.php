<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubAnnouncement extends Model
{
    use HasFactory;

    protected $fillable = [
        'club_id',
        'content',
    ];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function comments()
    {
        return $this->hasMany(ClubAnnouncementComment::class, 'club_announcement_id', 'id');
    }
}
