<?php

namespace App\Http\Livewire\Config;

use Livewire\Component;
use App\Models\Config;
use Livewire\WithPagination;

class ConfigIndex extends Component
{
    use WithPagination;
    
    protected $paginationTheme = "bootstrap"; 

    public function render()
    {
        $configs = Config::where('id','>' ,0)->latest('id')->paginate(5);
        return view('livewire.config.config-index',compact('configs'));
    }
}
