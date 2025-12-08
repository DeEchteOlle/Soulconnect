<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Conversation extends Model
{
    use HasFactory;

    protected $guarded =
    [

    ];
    
    public function user1(){
        return $this->belongsTo(user::class, 'user1_id');
    }
    
    public function user2(){
        return $this->belongsTo(user::class, 'user2_id');
    }
}
