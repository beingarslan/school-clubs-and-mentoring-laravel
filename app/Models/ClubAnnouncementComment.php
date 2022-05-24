<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubAnnouncementComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'club_announcement_id',
        'user_id',
        'content',
    ];

    public function clubAnnouncement()
    {
        return $this->belongsTo(ClubAnnouncement::class, 'club_announcement_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
