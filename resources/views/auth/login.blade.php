<x-layout>
    <form method="post" action="/login">
    <label></label>
@csrf
@if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif
    <input type="email" placeholder="email" name="email"></input>
    <br>
    <input type="password" placeholder="password" name="password"></input>
    <button>login</button>
    </form>
    </x-layout>