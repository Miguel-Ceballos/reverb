<?php

namespace App\Livewire;

use App\Events\MessageSent;
use App\Models\Message;
use Livewire\Component;

class ManageMessages extends Component
{
    public string $content;

    public $mensajes;

    public function mount()
    {
        $this->mensajes = Message::latest()->get();
    }

    public function render()
    {
        return view('livewire.manage-messages');
    }

    public function saveMessage() : void
    {
//        $this->validate();
        Message::create([
            'content' => $this->content,
            'user_id' => auth()->user()->id,
        ]);

        $this->reset('content');

        MessageSent::dispatch();
    }

    public function rules()
    {
        return [
            'content' => 'required',
        ];
    }
}
