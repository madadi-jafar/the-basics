<div>
    <h2>Posts:</h2>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr wire:key="post-{{ $post->id }}">
                    <td>{{ str($post->title)->words(4) }}</td>
                    <td>{{ str($post->content)->words(8) }}</td>
                    <td>
                        <button type="button" wire:click="delete({{ $post->id }})"
                            wire:confirm="Are you sure you want to delete this post {{ $post->id }}?">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
</div>
