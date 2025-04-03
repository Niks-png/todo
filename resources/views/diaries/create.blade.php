<x-layout>
<x-slot:title>Izveido dienasgramates ierakstu</x-slot:title>
<h1>Izveidot dienasgramates ierakstu</h1>
<form action="/diaries" method="POST">
@csrf
<h1>title</h1>
  <input name="title" />
  <br>
  <h1>body</h1>
  <textarea name="body"> 
  </textarea>
  <br>
  <h1>date</h1>
  <input name="date" type="date"/>
  @error("content")
  <p>{{ $message}}</p>
  @enderror
  <button>Saglabāt</button>
</form>
                        
</x-layout>