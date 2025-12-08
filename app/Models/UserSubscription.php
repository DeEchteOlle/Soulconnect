<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class UserSubscription extends Model
{
    use HasFactory;

    protected $guarded = 
    [
        
    ];

    public function user(){
        return $this->belongsTo(user::class, 'user_id');
     }
     public function plan(){
        return $this->belongsTo(SubscriptionPlan::class, 'plan_id');
     }
}

