<?php

namespace App\Http\Livewire;

use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ShowNews extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    private $paginate = 25;


    public function render()
    {
        $data['news'] = News::where('user_id', Auth::id())->paginate($this->paginate);

        return view('livewire.show-news', $data);
    }
}
