<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task as TaskModel;


class Task extends Component
{

    public TaskModel $task;


    public function delete(): void
    {
        $this->task->delete();
        redirect()->route('tasks.index');
    }

    public function completed(): void
    {
        $this->task->update(['completed' => true]);
    }



    public function render()
    {
        return view('livewire.task');
    }
}
