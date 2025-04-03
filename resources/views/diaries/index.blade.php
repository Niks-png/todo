
<x-layout>
<x-slot:title>
diary
</x-slot:title>
<h1>diary</h1>
<ul>
  @foreach ($diaries as $diary)
  <li><a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</a></li>
  @endforeach
</ul>
</x-layout>
