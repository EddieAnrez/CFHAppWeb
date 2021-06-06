<?php

namespace App\Http\Livewire\Config;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render() 
    {
        $posts = Post::where('user_id',auth()->user()->id) /* ('id','>',0)  */
        ->where('name','LIKE', '%'.$this->search.'%')
        ->latest('id')
        ->paginate();
        return view('livewire.config.post-index',compact('posts'));
    }
}
