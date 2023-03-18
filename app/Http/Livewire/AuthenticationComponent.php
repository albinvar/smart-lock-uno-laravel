<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
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


    public function lock()
    {
        $this->successUnlockModal = false;
        try {
            $response = Http::asForm()->post(env('API_ENDPOINT', '') . '/lock', [
                'action' => 'lock',
                'password' => '',
            ]);

            $this->confirmingPassword = false;

            if ($response->ok()) {
                // handle successful response
                session()->flash('success', $response->json('message'));
                $this->successLockModal = true;
            } else {
                // handle error response
                session()->flash('error', $response->json('message'));
                $this->errorLockModal = true;
            }

        } catch (\Exception $e) {
            session()->flash('error', 'Error connecting with the door lock.');
            $this->errorLockModal = true;
        }
    }

    public function unlock()
    {
        try {
            $response = Http::asForm()->post(env('API_ENDPOINT', '') . '/lock', [
                'action' => 'unlock',
                'password' => bcrypt($this->password),
            ]);

            $this->confirmingPassword = false;

            if ($response->ok()) {
                // handle successful response
                session()->flash('success', $response->json('message'));
                $this->successUnlockModal = true;
            } else {
                // handle error response
                session()->flash('error', $response->json('message'));
                $this->errorUnlockModal = true;
            }

        } catch (\Exception $e) {
            session()->flash('error', 'Issues encountered while connecting to the lock.');
            $this->errorUnlockModal = true;
        }
    }

    public function render()
    {
        return view('livewire.authentication-component');
    }
}
