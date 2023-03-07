<form class="mx-auto mt-2 space-y-2" wire:submit.prevent="{{ $method }}">
    <div class="w-full">
        <label for="task" class="block text-md text-gray-500">Titulo</label>
        <div class="mt-2">
            <input type="text" name="task" id="task" wire:model="task" placeholder="E.j. Crear vista"
                class="block w-full rounded-md border-0 py-2 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600">
        </div>
    </div>

    <div class="w-full">
        <label for="description" class="block text-md text-gray-500">Descripción</label>
        <div class="mt-2">
            <textarea name="description" id="description" wire:model="description" placeholder="E.j. Descripcion de la tarea"
                class="block w-full rounded-md border-0 py-2 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600"></textarea>
        </div>
    </div>

    <div class="w-full flex space-x-2">
        <div class="w-1/3">
            <label for="start" class="block text-md text-gray-500">Fecha de inicio</label>
            <div class="mt-2">
                <input type="date" name="start" id="start" wire:model="start"
                    class="block w-full rounded-md border-0 py-2 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600">
            </div>
        </div>

        <div class="w-1/3">
            <label for="end" class="block text-md text-gray-500">Fecha de entrega</label>
            <div class="mt-2">
                <input type="date" name="end" id="end" wire:model="end"
                    class="block w-full rounded-md border-0 py-2 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600">
            </div>
        </div>

        <div class="w-1/3">
            <label for="task" class="block text-md text-gray-500">Prioridad</label>
            <div class="mt-2">
                <select name="priority" id="priority" wire:model="priority"
                    class="block w-full rounded-md border-0 py-2 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600">
                    @foreach ($priorities as $priority)
                        <option value="{{ $priority }}">{{ $priority }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    
    <button
        class="block w-full rounded-md bg-green-600 px-3.5 py-2.5 mt-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Guardar
    </button>
</form>
