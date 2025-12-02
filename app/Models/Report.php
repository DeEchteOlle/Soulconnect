<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'reason',
        'reported_at'
    ];
     public function reporter(){
        return $this->belongsTo(user::class, 'reporter_id');
     }

     public function reported(){
        return $this->belongsTo(user::class, 'reported_id');
     }
}
