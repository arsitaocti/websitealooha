<?php

namespace App\Controllers;

use App\Models\MessageModel;

class Message extends BaseController
{
    public function index()
    {
        return view('messages');
    }

    public function getMessages($senderId, $receiverId)
    {
        $messageModel = new MessageModel();

        $messages = $messageModel->getMessages($senderId, $receiverId);

        return $this->response->setJSON($messages);
    }

    public function saveMessage()
    {
        $messageModel = new MessageModel();
        
        $senderId = $this->request->getPost('sender_id');
        $receiverId = $this->request->getPost('receiver_id');
        $message = $this->request->getPost('message');

        $messageModel->saveMessage($senderId, $receiverId, $message);

        return $this->response->setJSON(['status' => 'success']);
    }
}
