<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class FormProject extends Component
{
    public $method;
    public $project;
    public $description;

    protected $listeners = [
        'formProject'
    ];

    public function register()
    {
        $self = $this;

        Project::create([
            'project' => $self->project,
            'description' => $self->description,
        ]);

        // Todo: Leer proyectos
        // Todo: Ocultar formulario
        $self->emit('hideRegisterProject');
    }

    public function formProject($method)
    {
        $this->method = $method;
    }

    public function render()
    {
        return view('livewire.projects.form-project');
    }
}
