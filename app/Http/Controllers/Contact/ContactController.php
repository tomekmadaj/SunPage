<?php

namespace App\Http\Controllers\Contact;

use App\Http\Requests\AddMessage;
use App\Http\Requests\ShowMessage;
use App\Http\Controllers\Controller;
// use App\Repository\MessageRepository;
use App\Repository\MessageRepositoryInterface;

class ContactController extends Controller
{
    private MessageRepositoryInterface $messageRepository;

    public function __construct(MessageRepositoryInterface $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }

    public function __invoke()
    {
        return view('contact.form');
    }

    public function list()
    {
        $messages = $this->messageRepository->getAllMessages(10);

        return view('contact.list', [
            'messages' => $messages
        ]);
    }

    public function show(ShowMessage $request, $id)
    {
        $request->validated();

        $message = $this->messageRepository->getMessage($id);

        return view('contact.show', [
            'id' => $message['id'],
            'message' => $message
        ]);
    }

    public function addMessage(AddMessage $request)
    {
        $data = $request->validated();

        $this->messageRepository->addMessage($data);

        return redirect()
            ->route('contact.form')
            ->with('success', 'Wiadomość została wysłana pomyślnie');
    }
}
