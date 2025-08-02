<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Show Posts')]

class ShowPosts extends Component
{

    public function delete(Post $post)
    {
        // Logic to delete a post can be added here
        $post->delete();
    }

    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Post::all(), // Assuming you have a Post model
        ]);
    }
}
