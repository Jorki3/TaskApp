<form class="mx-auto mt-2 space-y-2" wire:submit.prevent="{{ $method }}">
    <div class="sm:w-full">
        <label for="project" class="block text-md {{ $textColor }}">Nombre del proyecto</label>
        <div class="mt-2">
            <input type="text" name="project" id="project" wire:model="project" placeholder="E.j. TaskApp"
                class="block w-full rounded-md border-0 py-2 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600">
        </div>
    </div>

    <div class="sm:w-full">
        <label for="description" class="block text-md {{ $textColor }}">Descripción del proyecto</label>
        <div class="mt-2">
            <textarea type="text" name="description" id="description" wire:model="description" placeholder="E.j. TaskApp"
                class="block w-full rounded-md border-0 py-2 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600"></textarea>
        </div>
    </div>

    <button
        class="block w-full rounded-md bg-green-600 px-3.5 py-2.5 mt-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Guardar
    </button>
</form>
