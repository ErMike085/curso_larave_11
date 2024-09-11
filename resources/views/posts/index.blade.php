<x-app-layout>


    <h1>Aquí se mostrarán todos los posts</h1>

    <a href="/posts/create">
        Nuevo Post
    </a>

    <ul>

        @foreach ($posts as $post)
            <li>
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
</x-app-layout>
