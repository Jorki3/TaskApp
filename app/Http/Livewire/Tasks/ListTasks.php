<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class ListTasks extends Component
{
    public $project;

    public $readyToLoad = false;

    protected $listeners = [
        'readTasks' => 'read'
    ];

    public function loadTasks()
    {
        $this->readyToLoad = true;
    }

    public function read()
    {
        return Task::where('project', $this->project->id)
            ->get();
    }

    public function render()
    {
        return view('livewire.tasks.list-tasks', [
            'tasks' => $this->readyToLoad ? $this->read() : []
        ]);
    }
}
