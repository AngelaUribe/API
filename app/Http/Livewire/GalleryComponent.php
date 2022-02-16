<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class GalleryComponent extends Component
{
    public function render()
    {
        return view('livewire.gallery-component', [
            'posts' => Post::with('user')->take(6)->get()
        ]);
    }
}
