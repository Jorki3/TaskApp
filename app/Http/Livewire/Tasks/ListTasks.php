<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class ListTasks extends Component
{
    public $project;

    protected $listeners = [
        'readTasks' => 'read'
    ];

    public function read()
    {
        return Task::where('project', $this->project->id)
            ->get();
    }

    public function render()
    {
        return view('livewire.tasks.list-tasks', [
            'tasks' => $this->read()
        ]);
    }
}
