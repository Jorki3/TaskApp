<div class="p-4">
    @if ($project)
        @livewire('projects.info-project', ['project' => $project], key($project->id))

        @livewire('tasks.list-tasks', ['project' => $project], key($project->id))

        @livewire('tasks.add-task', ['project' => $project], key($project->id))
    @else
        No hay proyecto seleccionado
    @endif
</div>
