<?php

namespace App\Http\Livewire\Config;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Service;

class ServicesIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render() 
    {
        $services = Service::where('id','>',0) /* ('id','>',0)  */
        ->where('name','LIKE', '%'.$this->search.'%')
        ->latest('id')
        ->paginate();
        return view('livewire.config.services-index',compact('services'));
    }
}
