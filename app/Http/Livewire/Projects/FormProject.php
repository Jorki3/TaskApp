<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class FormProject extends Component
{
    public $method;
    public $idProject;
    public $project;
    public $description;

    public $textColor = 'text-white';

    protected $listeners = [
        'formProject'
    ];

    public function update()
    {
        $self = $this;

        Project::firstWhere('id', $self->idProject)->update([
            'project' => $self->project,
            'description' => $self->description,
        ]);

        $self->emit('readProjects');
        $self->emit('hideUpdateProject');
    }

    public function register()
    {
        $self = $this;

        Project::create([
            'project' => $self->project,
            'description' => $self->description,
        ]);

        $self->emit('readProjects');
        $self->emit('hideRegisterProject');
    }

    public function edit($idProject)
    {
        $self = $this;
        $project = Project::firstWhere('id', $idProject);

        $self->idProject = $idProject;
        $self->project = $project->project;
        $self->description = $project->description;
    }

    public function formProject($method, $idProject = null)
    {
        $this->method = $method;

        if ($method == 'update') {
            $this->edit($idProject);
            $this->textColor = 'text-gray-800';
        }
    }

    public function render()
    {
        return view('livewire.projects.form-project');
    }
}
