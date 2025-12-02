<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
     protected $fillable = [
        'liker_id',
        'liked_id',
        'liked_at',
     ];
    public function sender(){
        return $this->belongsTo(User::class, 'sender_id');
    }
    
    public function receiver(){
        return $this->belongsTo(User::class, 'receiver_id');
    }
}
