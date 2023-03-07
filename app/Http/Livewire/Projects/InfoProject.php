<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

class InfoProject extends Component
{
    public $project;
    public $showForm = false;

    protected $listeners = [
        'hideUpdateProject' => 'showForm'
    ];

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
