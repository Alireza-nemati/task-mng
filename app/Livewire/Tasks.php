<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

class Tasks extends Component
{
    use WithPagination;

    public $search = '';

    //protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function delete(Task $task): void
    {
        $task->delete();
    }

    public function completed(Task $task): void
    {
        $task->update(['completed' => true]);
    }

    public function render()
    {
        return view('livewire.tasks', [
            'tasks' => Task::search($this->search)
        ]);
    }
}
