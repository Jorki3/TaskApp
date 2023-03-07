<div class="mt-4 text-white ">
    <ul class="list-none text-xl space-y-2">
        @foreach ($projects as $project)
            <li>
                <button wire:click="select({{ $project->id }})">{{ $project->project }}</button>
            </li>
        @endforeach
    </ul>
</div>
