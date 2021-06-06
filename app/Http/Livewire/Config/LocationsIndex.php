<?php

namespace App\Http\Livewire\Config;
use Livewire\Component;
use App\Models\Location;
use Livewire\WithPagination;


class LocationsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap"; 

    public $search; 

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {

      $locations= Location::where('id','>',0) 
        ->where('name','LIKE', '%'.$this->search.'%')
        ->latest('id')
        ->paginate(10);
        return view('livewire.config.locations-index',compact('locations')); 

/* 
        $locations = Location::where('id','>',0)->paginate(10);
        return view('livewire.config.locations-index',compact('locations')); */


       /*  return view('livewire.config.locations-index',[
            'locations'=>Location::where('id','>',0) 
            ->where('name','LIKE', '%'.$this->search.'%')
            ->latest('id')
            ->paginate(10)
        ]);      */   

       
    }
}
