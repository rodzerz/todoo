<x-layout>
    <x-slot:title>{{ $diaries->title }} - Edit</x-slot:title>

    <h1>Edit diaries</h1>

    <form method="POST" action="/diaries/{{ $diaries->id }}">
        @csrf
        @method('PUT')

        <div>
            <label for="title">diaries title:</label>
            @error("title")
                <p style="color: red;">{{ $message }}</p>
            @enderror
            <input type="text" id="title" name="title" value="{{ old('title', $diaries->title) }}">

            <label>
                Izpildīts: 
                <input name="body" type="hidden" value="0">
                <input name="body" type="checkbox" value="1" {{ old("body", $diaries->body) ? 'checked' : '' }}>
            </label>
            <label>
            <input name="date" >
            </label>

            @error("body")
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>


       
        <button type="submit">Saglabāt</button>
    </form>
</x-layout>
