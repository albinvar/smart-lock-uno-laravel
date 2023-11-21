<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AuthLogs extends Component
{

    public $authLogs;

    public function mount()
    {
        $this->authLogs = \App\Models\AuthLog::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.auth-logs');
    }
}
