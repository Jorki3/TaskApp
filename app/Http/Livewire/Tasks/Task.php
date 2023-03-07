<?php

namespace App\Http\Livewire\Tasks;

use Livewire\Component;

class Task extends Component
{
    public $task;
    public $showForm = false;
    public $priorityColor;

    protected $listeners = [
        'showFormTask' => 'hideForm'
    ];

    public function hideForm()
    {
        $this->showForm = false;
    }

    public function showForm()
    {
        $this->showForm = !$this->showForm;

        if ($this->showForm != false) {
            $this->emit('formTask', 'update', $this->task->id);
        }
    }

    public function render()
    {
        return view('livewire.tasks.task');
    }
}
