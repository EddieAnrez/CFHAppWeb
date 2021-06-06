<?php

namespace App\Http\Livewire\Config;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Video;

class VideoIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $videos= Video::where('status',2) 
        ->where('name','LIKE', '%'.$this->search.'%')
        ->latest('id')
        ->paginate(10);
        

        return view('livewire.config.video-index',compact('videos'));
    }
}
