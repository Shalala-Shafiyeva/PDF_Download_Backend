<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    protected $fillable = [
        'title',
        'description',
        'receiver',
        'sender'
    ];

    public function sender_user()
    {
        return $this->belongsTo(User::class, "sender", 'id');
    }

    public function receiver_user()
    {
        return $this->belongsTo(User::class, "receiver", 'id');
    }
}
