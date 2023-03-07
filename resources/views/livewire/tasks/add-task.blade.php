<div class="mx-auto my-4 p-4 bg-white rounded-xl shadow-md overflow-hidden hover:cursor-pointer">
    <div class="{{$showForm ? 'flex' : ''}} text-center" wire:click="showForm">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-8 h-8 text-green-800 {{ $showForm ? '' : 'mx-auto' }}">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>

        <span class="text-lg font-semibold">Agregar Tarea</span>
    </div>

    @if ($showForm)
        @livewire('tasks.form-task', ['project' => $project], key($project->id))
    @endif
</div>
