<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class InfoProject extends Component
{
    public $project;
    public $showForm = false;

    protected $listeners = [
        'hideUpdateProject' => 'showForm'
    ];

    public function delete()
    {
        $project = $this->project->id;

        // Todo: Eliminar tareas
        // Task::where('project', $project)->delete();
        Project::find($project)->delete();

        return redirect('taskapp');
    }

    public function showForm()
    {
        $this->showForm = !$this->showForm;

        if ($this->showForm != false) {
            $this->emit('formProject', 'update', $this->project->id);
        }
    }

    public function render()
    {
        return view('livewire.projects.info-project');
    }
}
