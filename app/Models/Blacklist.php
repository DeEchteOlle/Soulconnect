<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blacklist extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'user_id',
        'reason'
    ];
    public function blacklisted(){
        return $this->belongsTo(user::class, 'user_id');
     }
}
