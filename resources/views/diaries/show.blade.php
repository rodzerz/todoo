
<x-layout>
  <x-slot:title>
    {{ $diarie->title }}
  </x-slot:title>
  <h1>{{ $diarie->title}}</h1>
  <p>{{ $diarie->date}}</p>

<a href="{{ route('diaries.edit', $diarie->id) }}">Edit</a>   

<form method="POST" action="/diaries/{{$diarie->id}}">
@csrf
@method("delete")
<button type="submit"> dzest </button>
</form>

</x-layout>
