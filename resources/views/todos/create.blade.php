<x-slot:title>Izveidot uzdevumu</x-slot:title>
<h1>Izveidot uzdevumu</h1>

<form action="/todos" method="POST">
@csrf
    <div>
        <label for="content">Uzdevums</label>
        <input type="content" name="content" id="content" required>
    </div>
    @error("content")
  <p>{{ $message }}</p>
    @enderror
    <button type="submit">Saglabāt</button>
</form>