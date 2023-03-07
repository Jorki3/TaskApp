<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sidebar extends Component
{
    public $showForm = false;

    protected $listeners = [
        'hideRegisterProject' => 'showForm'
    ];

    public function showForm()
    {
        $this->showForm = !$this->showForm;

        if ($this->showForm != false) {
            $this->emit('formProject', 'register');
        }
    }

    public function render()
    {
        return view('livewire.sidebar');
    }
}
