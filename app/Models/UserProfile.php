<?php

namespace App\Models;
use App\Enums\Gender;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable= [
        'users_id',
        'profile_pictures_id',
        'one_liner',
        'relation_values',
        'partner_qualities',
        'gender',
        'gender_preference',
        'date_of_birth',
        'zipcode',
        'has_pets'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profilePicture()
    {
        return $this->belongsTo(ProfilePicture::class);
    }
    protected $casts = 
    [
    'gender' => Gender::class,
    ];
}
