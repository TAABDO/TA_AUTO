<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    <x-navbar />

    <footer>
        @include('includes.footer')
    </footer>
</body>
</html>
