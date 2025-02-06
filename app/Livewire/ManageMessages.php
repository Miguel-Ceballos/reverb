<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;

class ManageMessages extends Component
{
    public $content;

    public $messages = [];

    public function mount()
    {
        $this->messages = Message::orderByDesc('created_at')->get();
    }

    public function render()
    {
        return view('livewire.manage-messages');
    }

    public function save()
    {
        $this->validate([
            'content' => ['required', 'string', 'min:3', 'max:100'],
        ]);

        Message::create([
            'content' => $this->content,
            'user_id' => auth()->user()->id,
        ]);

        $this->reset();
    }
}
