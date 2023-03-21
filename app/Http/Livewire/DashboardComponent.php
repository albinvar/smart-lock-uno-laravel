<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class DashboardComponent extends Component
{

    public bool $status = false;

    protected $listeners = ['statusUpdated' => '$refresh'];

    public function mount()
    {
        // Call the API endpoint to get the initial status
        $this->pollServiceStatus();
        $this->dispatchBrowserEvent('statusUpdated');
    }

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

    public function getStatusUpdatedProperty()
    {
        return $this->status . '_' . time();
    }

    public function getStatusUpdated()
    {
        $this->dispatchBrowserEvent('statusUpdated');
    }

    public function render()
    {
        return view('livewire.dashboard-component');
    }
}
