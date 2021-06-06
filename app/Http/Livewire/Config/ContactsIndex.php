<?php

namespace App\Http\Livewire\Config;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactsIndex extends Component
{
    use WithPagination;
    public $search; 

    public function updatingSearch(){
        $this->resetPage();
    }

    protected $paginationTheme = "bootstrap";

    public function render()
    {
        $contacts= Contact::where('name','LIKE', '%'.$this->search.'%')
        ->orderBy('status', 'desc')
        ->latest('id')
        ->paginate(20);
        return view('livewire.config.contacts-index',compact('contacts'));

        
    }
}
