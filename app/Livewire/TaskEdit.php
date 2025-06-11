<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Task;

class TaskEdit extends Component
{

    public Task $task;

    #[Validate('required')]
    public $title;

    #[Validate('required')]
    public $description;

    public $priority;

    public function mount(): void
    {
        $this->title = $this->task->title;
        $this->description = $this->task->description;
        $this->priority = $this->task->priority;
    }

    public function updateTask()
    {

        $this->validate();
        $this->task->update([
            'title' => $this->title,
            'description' => $this->description,
            'priority' => $this->priority
        ]);
        $this->redirectRoute('tasks.index');
    }

    public function render()
    {
        return view('livewire.task-edit');
    }
}
