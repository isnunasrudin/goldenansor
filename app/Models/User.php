<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'user_event', 'user_id', 'event_id');
    }

    public function presences()
    {
        return $this->belongsToMany(Session::class, 'user_session', 'user_id', 'session_id');
    }

    public function examAttempts()
    {
        return $this->hasMany(ExamAttempt::class, 'user_id', 'id');
    }

    public function sessionPictures()
    {
        return $this->hasMany(SessionPicture::class, 'user_id', 'id');
    }

    public function canAccessPanel()
    {
        return true;
    }
}
