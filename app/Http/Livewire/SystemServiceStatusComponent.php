<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SystemServiceStatusComponent extends Component
{
    public $status = false;

    public $faceEnabled = false;
    public $rfidEnabled = false;
    public $webapiEnabled = false;

    public function mount($status, $faceEnabled, $rfidEnabled, $webapiEnabled)
    {
        $this->status = $status;
        $this->faceEnabled = $faceEnabled;
        $this->rfidEnabled = $rfidEnabled;
        $this->webapiEnabled = $webapiEnabled;
    }
    public function render()
    {
        return view('livewire.system-service-status-component');
    }
}
