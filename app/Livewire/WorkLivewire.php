<?php

namespace App\Livewire;

use Livewire\Component;

class WorkLivewire extends Component
{
    public function render()
    {
        $works =  \App\Models\Work::all();
        return view('livewire.work-livewire',compact('works'));
    }
}
