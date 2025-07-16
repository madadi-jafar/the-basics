<div>
    <form wire:submit='add'>
        <input type="text" wire:model.live="todo" placeholder="Add a new todo" />

        <span>Current Todo: {{ $todo }} </span>

        <button type="submit" >Add</button>    
    </form>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
