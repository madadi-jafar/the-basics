<div>
    {{-- <input type="text" wire:model.live.debounce.500ms="todo" placeholder="Enter todo...">
    
    <button wire:click="addTodo" wire:loading.attr="disabled">
        Save
    </button> --}}

    <form wire:submit="addTodo">
        <input type="text" wire:model.live.debounce.500ms="todo" placeholder="Enter todo...">
        <input type="submit" value="Add Todo">
    </form>

    <div>Current Todo: {{ $todo }}</div>

    <ul class="mt-4">
        @foreach ($todos as $item)
            <li class="border-b py-2">{{ $item }}</li>
        @endforeach
    </ul>
</div>
