<x-layout>
@auth
  <p>Sveiks, {{ Auth::user()->first_name}}</p>
  <form method="POST" action="/logout">
@csrf
<button>LOGOUT</button>
</form>
@endauth
@guest
  <p>Sveiks, viesi!</p>
  <a></a>
@endguest
</x-layout>
