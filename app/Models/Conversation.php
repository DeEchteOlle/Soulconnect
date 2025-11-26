<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    
    public function user1(){
        return $this->belongsTo(user::class, 'user1_id');
    }
    
    public function user2(){
        return $this->belongsTo(user::class, 'user2_id');
    }
}
