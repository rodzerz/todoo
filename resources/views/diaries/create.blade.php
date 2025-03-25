<x-slot:title>Izveidot diary</x-slot:title>
<h1>Izveidot diary</h1>

<form action="/diaries" method="POST">
@csrf
    <div>
        <label for="title">title</label>
        <input type="title" name="title" id="title" required>
    </div>
    @error("title")
  <p>{{ $message }}</p>
    @enderror
    <div>
        <label for="body">body</label>
        <input type="body" name="body" id="body" required>
    </div>
    @error("body")
  <p>{{ $message }}</p>
    @enderror
    <div>
        <label for="date">date</label>
        <input type="date" name="date" id="date" required>
    </div>
    @error("date")
  <p>{{ $message }}</p>
    @enderror
    <button type="submit">Saglabāt</button>
</form>