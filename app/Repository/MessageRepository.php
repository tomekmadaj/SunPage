<?php

declare(strict_types=1);

namespace App\Repository;

use App\Models\Message;
use App\Repository\MessageRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class MessageRepository implements MessageRepositoryInterface
{
    private Message $messageModel;

    public function __construct(Message $messageModel)
    {
        $this->messageModel = $messageModel;
    }

    public function getAllMessages($limit = 10): LengthAwarePaginator
    {
        return $this->messageModel->paginate($limit);
    }

    public function getMessage($messageId): Message
    {
        return $this->messageModel->find($messageId);
    }

    public function addMessage($data): void
    {
        $message = $this->messageModel;
        $message->name = $data['name'];
        $message->last_name = $data['last_name'];
        $message->email = $data['email'];
        $message->phone = $data['phone'];
        $message->message = $data['message'];
        $message->save();
    }
}
