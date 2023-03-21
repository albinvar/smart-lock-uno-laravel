<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SystemServiceStatusComponent extends Component
{
    public $status = false;

    public function mount($status)
    {
        $this->status = $status;
    }
    public function render()
    {
        return view('livewire.system-service-status-component');
    }
}
