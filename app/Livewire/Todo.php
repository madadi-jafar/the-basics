<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $todo = "";

    public $todos = [
        'Todo 1',
        'Todo 2',
        'Todo 3',
    ];

    public function addTodo()
    {
        // Prevent adding empty or whitespace-only todos
        if (trim($this->todo) === '') {
            return;
        }

        // Add the todo to the list
        $this->todos[] = trim($this->todo);

        // Reset the input field
        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todo');
    }
}
