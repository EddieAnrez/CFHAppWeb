<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category_L;
use App\Models\Area;
use App\Models\Location;

class LocationsIndex extends Component
{
    public $idCategory;
    public $idArea;
    public $idLocation;
    public $idSearch;

    public function updatingSearch(){
        $this->resetPage();
    }
 
    public function render()
    {
        $locations = Location::where('status', 2)
        ->where('category_id','LIKE', '%'.$this->idCategory.'%')
        ->where('area_id','LIKE', '%'.$this->idArea.'%')
        ->where('id','LIKE', '%'.$this->idLocation.'%')
        ->where('name','LIKE', '%'.$this->idSearch.'%')
        
        ->latest('id')
        ->paginate(9);

        $categories = Category_L::all();
        $areas = Area::all();
        return view('livewire.locations-index', compact('locations', 'categories','areas'));
        
    }
}
