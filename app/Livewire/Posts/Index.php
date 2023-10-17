<?php

namespace App\Livewire\Posts;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Posts | Fianmi Developer ')]

class Index extends Component
{
    public function render()
    {
        return view('livewire.posts.index');
    }
}
