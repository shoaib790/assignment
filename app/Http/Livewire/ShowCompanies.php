<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;

class ShowCompanies extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    private $paginate = 25;

    public function render()
    {
        $data['companies'] = Company::paginate($this->paginate);
        return view('livewire.show-companies', $data)->extends('layouts.app')->section('body');
    }


}
