<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class ListProjects extends Component
{
    protected $listeners = [
        'readProjects' => 'read'
    ];

    public function select($id)
    {
        $this->emit('selectProject', $id);
    }

    public function read()
    {
        return Project::all();
    }

    public function render()
    {
        return view('livewire.projects.list-projects', [
            'projects' => $this->read()
        ]);
    }
}
