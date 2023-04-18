<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;
use App\Models\Member;

class MemberUpdate extends Component
{

    private $member;

    public function mount($id){

        $this->member = Member::find($id);
    }

    public function render()
    {

        $data = $this->member;

        return view('livewire.backend.member-update', compact('data'));
    }
}
