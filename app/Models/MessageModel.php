<?php

namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table = 'messages';
    protected $primaryKey = 'id';
    protected $allowedFields = ['sender_id', 'receiver_id', 'message', 'created_at'];

    public function getMessages($senderId, $receiverId)
    {
        return $this->where(function ($builder) use ($senderId, $receiverId) {
            $builder->where('sender_id', $senderId)
                    ->where('receiver_id', $receiverId);
        })->orWhere(function ($builder) use ($senderId, $receiverId) {
            $builder->where('sender_id', $receiverId)
                    ->where('receiver_id', $senderId);
        })->orderBy('created_at', 'ASC')->findAll();
    }

    public function saveMessage($senderId, $receiverId, $message)
    {
        $data = [
            'sender_id' => $senderId,
            'receiver_id' => $receiverId,
            'message' => $message
        ];

        return $this->insert($data);
    }
}
