<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class AuthenticationComponent extends Component
{

    public bool $successLockModal = false;
    public bool $errorLockModal = false;
    public bool $successUnlockModal = false;
    public bool $errorUnlockModal = false;

    public bool $confirmingPassword = false;

    public string $password = '';

    public ?string $message = '';

    public $status = false;

    protected $listeners = ['statusUpdated'];


    public function lock()
    {
        $this->successUnlockModal = false;
        try {
            $response = Http::asForm()->post(env('API_ENDPOINT', 'http://127.0.0.1:5000') . '/lock', [
                'action' => 'lock',
                'password' => '',
            ]);

            $this->confirmingPassword = false;

            if ($response->ok()) {
                // handle successful response
                $this->message = $response->json('message');
                $this->successLockModal = true;
            } else {
                // handle error response
                $this->message = $response->json('message');
                $this->errorLockModal = true;
            }

        } catch (\Exception $e) {
            $this->message = 'Error connecting with the door lock.';
            $this->errorLockModal = true;
        }
    }

    public function unlock()
    {
        try {
            $response = Http::asForm()->post(env('API_ENDPOINT', 'http://127.0.0.1:5000') . '/lock', [
                'action' => 'unlock',
                'password' => bcrypt($this->password),
            ]);

            $this->confirmingPassword = false;

            if ($response->ok()) {
                // handle successful response
                $this->message = $response->json('message');
                $this->successUnlockModal = true;
            } else {
                // handle error response
                $this->message = $response->json('message');
                $this->errorUnlockModal = true;
            }

        } catch (\Exception $e) {
            $this->message = 'Issues encountered while connecting to the lock.';
            $this->errorUnlockModal = true;
        }
    }

    public function mount($service_status)
    {
        $this->status = $service_status;
    }

    public function render()
    {
        return view('livewire.authentication-component');
    }
}
