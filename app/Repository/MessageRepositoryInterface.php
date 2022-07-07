<?php

declare(strict_types=1);

namespace App\Repository;

use App\Models\Message;
use Illuminate\Pagination\LengthAwarePaginator;

interface MessageRepositoryInterface
{
    public function getAllMessages(int $limit): LengthAwarePaginator;

    public function getMessage($messageId): Message;

    public function addMessage($data): void;
}
