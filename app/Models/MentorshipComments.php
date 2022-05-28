<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorshipComments extends Model
{
    use HasFactory;
    protected $fillable = ['content', 'user_id', 'montorship_id'];

public function mentorship()
{
    return $this->belongsTo(Mentorship::class, 'montorship_id', 'id');


}

public function user()
{
    return $this->belongsTo(User::class);
}



}
