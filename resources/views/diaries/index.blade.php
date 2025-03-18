
<x-layout>
  <x-slot:title>
   diaries
  </x-slot:title>
 
  <h1>Diaries</h1>
    <ul>
  <?php foreach ($diaries as $diarie) { ?>
    <li><a href="/diaries/{{ $diarie->id }}">{{ $diarie->title }}</a></li>
  <?php } ?>
</ul>
</x-layout>
             