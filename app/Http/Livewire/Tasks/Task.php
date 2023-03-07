<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Task as ModelsTask;
use Livewire\Component;
use Livewire\WithPagination;

class Task extends Component
{
    public $task;
    public $showForm = false;

    protected $listeners = [
        'showFormTask' => 'hideForm'
    ];

    public function changeStatus()
    {
        ModelsTask::find($this->task->id)->update(['status' => !$this->task->status]);
        $this->emit('readTasks');
    }

    public function delete()
    {
        ModelsTask::find($this->task->id)->delete();
        $this->emit('readTasks');
    }

    public function hideForm()
    {
        $this->showForm = false;
    }

    public function showForm()
    {
        $this->showForm = !$this->showForm;

        if ($this->showForm != false) {
            $this->emit('formTask', 'update', $this->task->id);
        }
    }

    public function render()
    {
        return view('livewire.tasks.task');
    }
}
