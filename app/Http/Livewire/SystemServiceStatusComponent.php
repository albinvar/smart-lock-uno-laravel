<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SystemServiceStatusComponent extends Component
{

    public bool $status = false;

    public function pollServiceStatus()
    {
        try {
            $response = Http::timeout(5)->get(env('API_ENDPOINT', '') . '/ping');

            if ($response->ok() && $response->json('status') == 'ok') {
                // handle successful response
                $this->status = true;
            } else {
                $this->status = false;
            }

        } catch (\Exception $e) {
            $this->status = false;
        }
    }


    public function mount()
    {
        // Call the API endpoint to get the initial status
        $this->pollServiceStatus();
    }

    public function render()
    {
        return view('livewire.system-service-status-component');
    }
}
