<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset("style.css") }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? "Uzdevumi un dienasgrāmata" }}</title>
</head>

<body>

<x-navigation></x-navigation>
{{ $slot }}
</body>
</html>