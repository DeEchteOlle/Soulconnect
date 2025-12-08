<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Report extends Model
{
    use HasFactory;

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
