<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;
use App\Models\User;

class UserUpdate extends Component
{
    private $user;

    public function mount($id){

        $this->user = User::find($id);
    }

    public function render()
    {

        $data = $this->user;

        return view('livewire.backend.user-update', compact('data'));
    }
}
