<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class CarrouselComponent extends Component
{
    public function render()
    {
        return view('livewire.carrousel-component', [
            'posts' => Post::with('user')->take(6)->get()
        ]);
    }
}
