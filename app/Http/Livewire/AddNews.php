<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Livewire\Component;

class AddNews extends Component
{

    public function render()
    {
        $data['companies'] = Company::all();
        return view('livewire.add-news', $data)->extends('layouts.app')->section('body');
    }
}
