<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{

    #[Rule('required')]
    public $title = '';

    #[Rule('required')]
    public $content = '';


    public function save()
    {

        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
