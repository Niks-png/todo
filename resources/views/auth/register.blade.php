<x-layout>
<h1>Reģistrēties</h1>
<form method="POST">
<label></label>
@csrf
@if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif
  <input name="first_name"  placeholder="first name"required></input>
  <br>
 <input name="last_name" placeholder="last name" required> </input>
  <br>
  <input name="email" type="email" placeholder="email" required></input>
  <br>
  <input name="password" type="password" placeholder="password" required></input>
  <br>
  <input name="password_confirmation" type="password" placeholder="password" required></input>
  <button>Saglabāt</button>
</form>
</x-layout>