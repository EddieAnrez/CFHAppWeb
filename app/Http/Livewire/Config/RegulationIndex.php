<?php

namespace App\Http\Livewire\Config;

use Livewire\Component;
use App\Models\Regulation;
use Livewire\WithPagination;

class RegulationIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $regulations = Regulation::where ('id','>',0)
        ->where('name','LIKE', '%'.$this->search.'%') 
        ->latest('id')
        ->paginate(10);

        return view('livewire.config.regulation-index', compact('regulations'));
    }
}
