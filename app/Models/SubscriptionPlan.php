<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    protected $guarded = 
    [

    ];

    public function plan(){
        return $this->belongsTo(UserSubscription::class, 'plan_id');
     }
}
