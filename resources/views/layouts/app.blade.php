<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>@yield('title')</title> 
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
@if (!isset($hideHeader) || !$hideHeader)
        <header>@include('layouts.partials.header')</header>  
    @endif 
    <main>@yield('content')</main>  
    <footer>@include('layouts.partials.footer')</footer>  
</body>
</html>