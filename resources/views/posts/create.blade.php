    <x-app-layout>

        <h1>Formulario para crear un nuevo post</h1>

        <form action="{{ route('posts.store') }}" method="POST">

            @csrf

            <label for="title">Título:</label>
            <input type="text" name="title" id="title">
            <br>
            <label for="category">Categoría:</label>
            <input type="text" name="category" id="category">
            <br>
            <label for="content">Contenido:</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
            <br>
            <button type="submit">Crear Post</button>


        </form>

    </x-app-layout>
