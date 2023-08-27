<?php

namespace App\Livewire;

use Livewire\Component;

class CompanyLivewire extends Component
{
    public function render()
    {
        $companies = \App\Models\Company::all();
        return view('livewire.company-livewire', compact('companies'));
    }
}
