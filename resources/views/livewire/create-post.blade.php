<div style="display: flex; min-height: 100vh;">
    <!-- Sidebar -->
    <div style="width: 200px; padding: 20px; border-right: 1px solid #000;">
        <nav>
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li><a href="{{ url('/posts') }}"
                        style="display: block; margin-bottom: 10px; font-weight: bold; text-decoration: underline;">Posts</a>
                </li>
                <li><a href="{{ url('/posts/create') }}"
                        style="display: block; margin-bottom: 10px; font-weight: bold; text-decoration: underline;">Create
                        Post</a></li>
            </ul>
        </nav>
    </div>

    <!-- Content -->
    <div style="flex: 1; padding: 20px;">
        <h2 style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">New Post:</h2>

        <form wire:submit.prevent="save" style="max-width: 400px;">
            <!-- Title -->
            <div style="margin-bottom: 15px;">
                <label style="display: block; font-weight: bold; margin-bottom: 5px;">Title</label>
                <input type="text" wire:model="title"
                    style="width: 100%; padding: 5px; border: 1px solid #999; border-radius: 3px;">
                @error('title')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <!-- Content -->
            <div style="margin-bottom: 15px;">
                <label style="display: block; font-weight: bold; margin-bottom: 5px;">Content</label>
                <textarea wire:model="content"
                    style="width: 100%; padding: 5px; border: 1px solid #999; border-radius: 3px; height: 80px;"></textarea>
                @error('content')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <!-- Button -->
            <button type="submit"
                style="padding: 5px 12px; border: 1px solid #666; background: #eee; cursor: pointer;">
                Save
            </button>
        </form>
    </div>
</div>
