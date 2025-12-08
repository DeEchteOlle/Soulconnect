<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class SubscriptionPlan extends Model
{
    use HasFactory;

    protected $guarded = 
    [

    ];

    public function plan(){
        return $this->belongsTo(UserSubscription::class, 'plan_id');
     }
}
