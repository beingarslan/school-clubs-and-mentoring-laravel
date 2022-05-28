<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentoring extends Model
{
    use HasFactory;
    protected $fillable = ['tital', 'description'];

    public function mentorship()
    {
        return $this->belongsTo(Mentorship::class, 'mentorship_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(MentorshipComments::class, 'montorship_id', 'id');
    }
    
    public function getUserComments()
    {
        return $this->hasMany(MentorshipComments::class, 'user_id', 'id');
    }
}
