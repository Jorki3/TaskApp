<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class FormTask extends Component
{
    public $project;
    public $method;

    public $task;
    public $description;
    public $start;
    public $end;
    public $priority;
    public $status;

    public $priorities = [
        'Seleccionar' => 'Seleccionar',
        'Alta' => 'Alta',
        'Medio' => 'Medio',
        'Bajo' => 'Bajo',
    ];

    protected $listeners = [
        'formTask'
    ];

    public function register()
    {
        $self = $this;

        Task::create([
            'project' => $self->project->id,
            'task' => $self->task,
            'description' => $self->description,
            'start' => $self->start,
            'end' => $self->end,
            'priority' => $self->priority,
            'status' => 0,
        ]);

        //Todo: Leer tareas
        // $self->emit('readTasks');
        $self->emit('showFormAddTask');
    }

    public function formTask($method)
    {
        $this->method = $method;
    }

    public function render()
    {
        return view('livewire.tasks.form-task', [
            'priorities' => $this->priorities
        ]);
    }
}
