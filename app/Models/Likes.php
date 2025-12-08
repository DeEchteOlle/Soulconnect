<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Likes extends Model
{
    use HasFactory;

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
