<x-adminlayout>
    <ul class="list-none dark:text-white">
        @foreach ($posts as $post)
            <li class="flex gap-5">
                <a href="{{ route('post.show', $post) }}" target="_blank">{{ $post->title }}</a>
                <a href="{{ route('post.edit', $post) }}" target="_blank" class="text-blue-600">Edit</a>

                <form action="{{ route('post.destroy', $post) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 px-4 rounded">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    {!! $posts->links() !!}
</x-adminlayout>
