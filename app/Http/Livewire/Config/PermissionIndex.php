<?php

namespace App\Http\Livewire\Config;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Permisssion;

class PermissionIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $permissions = Permisssion::where ('id','>',0)
        ->where('name','LIKE', '%'.$this->search.'%') 
        ->latest('id')
        ->paginate(10);

        return view('livewire.config.permission-index', compact('permissions'));

        
    }
}
