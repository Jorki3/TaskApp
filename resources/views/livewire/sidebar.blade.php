<div class="h-screen fixed p-4 bg-sky-700 shadow-lg">
    <div class="my-4 text-white text-center">
        <p class="font-extrabold text-xl">Uptask App</p>
        <p class="font-medium text-sm">Laravel - Livewire - Tailwind CSS</p>
    </div>

    <button
        class="mx-auto flex items-center space-x-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        wire:click="showForm">
        <span>Nuevo proyecto</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
    </button>

    @if ($showForm)
        @livewire('projects.form-project')
    @endif
    
    @livewire('projects.list-projects')
</div>
