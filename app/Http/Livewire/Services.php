<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Service;
use App\Models\ServiceSubCategory;
use App\Models\ServiceCategory;

class Services extends Component
{
    public $subcategory;
    public $category;
    public $name;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
          
        $services = Service::where('id','>', 0)
        /* ->where('subcategory_id','LIKE',  '%'.$this->subcategory.'%') */
        ->where('subcategory_id','LIKE',  $this->subcategory)
        ->where('name','LIKE', '%'.$this->name.'%')
        /* ->where('subcategory_id','LIKE', '%'.$this->subcategory.'%') */
        ->latest('id')
        ->paginate(10);


        /* $subcategories = ServiceSubCategory::where('category_id','LIKE', '%'.$this->category.'%'); */
        $subcategories = ServiceSubCategory::where('id','>', 0)
        ->where('category_id','LIKE', $this->category)->orderBy('category_id')->latest('id')->get();
        $categories = ServiceCategory::all();
        return view('livewire.services', compact('services','subcategories','categories'));
    
        
    }
}
