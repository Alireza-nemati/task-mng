<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateTask extends Component
{

    #[Validate('required')]
    public $title;

    #[Validate('required')]
    public $description;

    public $priority = 'low';


    public function create()
    {
        $this->validate();

        \App\Models\Task::create([
            'title' => $this->title,
            'description' => $this->description,
            'priority' => $this->priority,
        ]);
        $this->redirectRoute('tasks.index');
    }

    public function render()
    {
        return view('livewire.create-task');
    }
}
