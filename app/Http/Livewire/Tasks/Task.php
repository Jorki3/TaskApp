<?php

namespace App\Http\Livewire\Tasks;

use Livewire\Component;

class Task extends Component
{
    public $task;

    public function render()
    {
        return view('livewire.tasks.task');
    }
}