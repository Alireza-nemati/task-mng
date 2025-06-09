<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class Tasks extends Component
{
    public $search = '';


    public function render()
    {
        return view('livewire.tasks',[
            'tasks'=>Task::search($this->search,10)
        ]);
    }
}
