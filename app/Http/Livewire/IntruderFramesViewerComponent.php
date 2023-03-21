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
        try {
            $response = Http::get(env('API_ENDPOINT', 'https://ariduno-api.lov3.pw') . '/intruders');

            if ($response->ok()) {
                $this->intruders = $response->json();
            } else {
                $this->intruders = [];
            }
        } catch (\Exception $e) {
            $this->intruders = [];
        }

    }
    public function render()
    {
        return view('livewire.intruder-frames-viewer-component');
    }
}
