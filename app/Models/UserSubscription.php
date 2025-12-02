<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSubscription extends Model
{
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

