<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'conversation_id',
        'content',
        'is_read',
        'sent_at',
        'is_deleted',
    ];

    public function sender()
    {
        // sender_id → users.id
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function conversation()
    {
        // conversation_id → conversations.id
        return $this->belongsTo(Conversation::class);
    }
}
