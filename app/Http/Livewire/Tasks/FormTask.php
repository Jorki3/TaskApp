<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class FormTask extends Component
{
    public $project;
    public $method;

    public $idTask;
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

    public function update()
    {
        $self = $this;

        Task::firstWhere('id', $self->idTask)->update([
            'task' => $self->task,
            'description' => $self->description,
            'start' => $self->start,
            'end' => $self->end,
            'priority' => $self->priority,
        ]);

        $self->emit('readTasks');
        $self->emit('showFormTask');
    }

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

        $self->emit('readTasks');
        $self->emit('showFormAddTask');
    }

    public function edit($idTask)
    {
        $self = $this;
        $task = Task::firstWhere('id', $idTask);

        $self->idTask = $idTask;
        $self->task = $task->task;
        $self->description = $task->description;
        $self->start = $task->start;
        $self->end = $task->end;
        $self->priority = $task->priority;
    }

    public function formTask($method, $idTask = null)
    {
        $this->method = $method;

        if ($method == 'update') {
            $this->edit($idTask);
        }
    }

    public function render()
    {
        return view('livewire.tasks.form-task', [
            'priorities' => $this->priorities
        ]);
    }
}
