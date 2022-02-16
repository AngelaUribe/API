<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserComponent extends Component
{
    public function render()
    {
        return view('livewire.user-component',[
            'users'=> User::latest()->with('posts')->paginate()
        ]);
    }
}
