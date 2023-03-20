<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class IntruderFramesViewerComponent extends Component
{

    public $intruders;

    public function mount()
    {
        $this->fetchIntruders();
    }

    public function fetchIntruders()
    {
        $response = Http::get(env('API_ENDPOINT', '') . '/intruders');

        if ($response->ok()) {
            $this->intruders = $response->json();
        } else {
            $this->intruders = [];
        }
    }
    public function render()
    {
        return view('livewire.intruder-frames-viewer-component');
    }
}
