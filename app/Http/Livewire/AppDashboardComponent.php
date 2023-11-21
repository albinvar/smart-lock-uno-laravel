<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class AppDashboardComponent extends Component
{
    public bool $status = false;

    // faceEnabled, rfidEnabled, webapiEnabled
    public bool $faceEnabled = false;
    public bool $rfidEnabled = false;
    public bool $webapiEnabled = false;


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
                $enabledStates = $response->json('enabled_states');

                // Update status
                $this->status = true;

                // Update enabled states
                $this->faceEnabled = $enabledStates['face'] ?? false;
                $this->rfidEnabled = $enabledStates['card'] ?? false;
                $this->webapiEnabled = $enabledStates['api'] ?? false;
            } else {
                $this->status = false;
                // Reset other flags if needed when status is not OK
                $this->faceEnabled = false;
                $this->rfidEnabled = false;
                $this->webapiEnabled = false;
            }
        } catch (\Exception $e) {
            $this->status = false;
            // Reset flags if an exception occurs during the request
            $this->faceEnabled = false;
            $this->rfidEnabled = false;
            $this->webapiEnabled = false;
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
        return view('livewire.app-dashboard-component');
    }
}
