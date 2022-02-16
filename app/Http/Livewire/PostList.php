<?php

namespace App\Http\Livewire;

use App\Models\Post;

use Livewire\Component;

class PostList extends Component
{
    public function render()
    {
        return view('livewire.post-list', [
            'post'=> Post::latest()->with('user')->take(6)->get()
        ]);
    }
}
