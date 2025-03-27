<x-layout>
    <x-slot:title>{{ $todo->content }} - Edit</x-slot:title>

    <h1>Edit Todo</h1>

    <form method="POST" action="/todos/{{ $todo->id }}">
        @csrf
        @method('PUT')

        <div>
            <label for="content">Todo Content:</label>
            @error("content")
                <p style="color: red;">{{ $message }}</p>
            @enderror
            <input type="text" id="content" name="content" value="{{ old('content', $todo->content) }}">

            <label>
                Izpildīts: 
                <input name="completed" type="hidden" value="0">
                <input name="completed" type="checkbox" value="1" {{ old("completed", $todo->completed) ? 'checked' : '' }}>
            </label>

            @error("completed")
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Saglabāt</button>
    </form>
</x-layout>
