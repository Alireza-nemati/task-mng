<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskRow extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.task-row',[
            'tasks' => Task::search($this->search,10)
        ]);
    }
}
