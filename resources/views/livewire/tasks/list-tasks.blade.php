<div>
    @foreach ($tasks as $task)
        @livewire('tasks.task', ['task' => $task], key($task->id))
    @endforeach
</div>
