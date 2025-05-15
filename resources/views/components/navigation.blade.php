<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
<nav>
    <ul>
    @auth

        <li><a href="/todos">Visi uzdevumi</a></li>
        <li><a href="/why">why</a></li>
        <li><a href="/diaries">diaries</a></li>
        <li><a href="/todos/create">create uzdevumu</a></li>
        <li><a href="/diaries/create">diaries create</a></li>
        @endauth
        @guest
        <li><a href="/login" wire:navigate>login</a></li>

        <li><a href="/register" wire:navigate>register</a></li>
        @endguest
        <li><a href="/">Sākums</a></li>
    </ul>
</nav>
</header>
           
</body>
</html>