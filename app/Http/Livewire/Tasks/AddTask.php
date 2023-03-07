<?php

namespace App\Http\Livewire\Tasks;

use Livewire\Component;

class AddTask extends Component
{
    public $showForm = false;
    public $project;

    protected $listeners = [
        'showFormAddTask' => 'showForm'
    ];

    public function showForm()
    {
        $this->showForm = !$this->showForm;

        if ($this->showForm != false) {
            $this->emit('formTask', 'register');
        }
    }

    public function render()
    {
        return view('livewire.tasks.add-task');
    }
}
