<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class AuthenticationComponent extends Component
{

    public $successModal = false;
    public $errorModal = false;
    public $confirmingPassword = false;
    public $password = '';


    public function lock()
    {
        $response = Http::post('http://localhost:5000/lock', [
            'action' => 'lock',
        ]);

       $this->confirmingPassword = false;

        if ($response->ok()) {
            // handle successful response
            session()->flash('success', 'Applicant created successfully');
            $this->successModal = true;
        } else {
            // handle error response
            session()->flash('error', 'Process failed..');
            $this->errorModal = true;
        }
    }

    public function unlock()
    {
        $response = Http::post('http://localhost:5000/lock', [
            'action' => 'unlock'
        ]);

        $this->confirmingPassword = false;

        if ($response->ok()) {
            // handle successful response
            session()->flash('success', 'Unlock successful..');
            $this->successModal = true;
        } else {
            // handle error response
            session()->flash('error', 'Unlocking failed..');
            $this->errorModal = true;
        }
    }

    public function render()
    {
        return view('livewire.authentication-component');
    }
}
