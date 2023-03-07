<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project as ModelsProject;
use Livewire\Component;

class Project extends Component
{
    public $project;

    protected $listeners = [
        'selectProject'
    ];

    public function selectProject($id)
    {
        $project = ModelsProject::firstWhere('id', $id);

        $this->project = $project;
    }

    public function render()
    {
        return view('livewire.projects.project');
    }
}
