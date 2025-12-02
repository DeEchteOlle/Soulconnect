<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentHistory extends Model
{
    protected $guarded =
    [
        
    ];

    public function usersubscription(){
        return $this->belongsTo(UserSubscription::class, 'user_subscription_id');
        
     }
     public function user(){
        return $this->belongsTo(user::class, 'user_id');
     }
}
