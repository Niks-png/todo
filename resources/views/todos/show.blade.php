
<x-layout>
  <x-slot:title>
    {{ $todo->content }}
  </x-slot:title>
  <h1>{{ $todo->content }}</h1>
 
  <ul>
  @foreach ($todos as $todo)
  <li><a href="/todos/edit{{ $todo->id }}">{{ $todo->content }}</a></li>
  @endforeach
</ul>
</x-layout>
