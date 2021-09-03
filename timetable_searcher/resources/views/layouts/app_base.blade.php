@yield('submit')
<!doctype html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     {{-- CSRF Token --}}
     <meta name="csrf-token" content="{{ csrf_token() }}">
 
     <title>{{ config('app.name', 'Timetable Searcher') }}</title>
 
     {{-- Styles --}}
     <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
 </head>
 <body>
 <div class="container">
    <nav class="navbar navbar-light">
        <span class="navbar-brand mb-0 h1">Timetable Searcher</span>
    </nav>
@yield('content')
    <div class="footer">
        2021 Copyright &copy; Pherkad Gamma
    </div>
 </div>
{{-- Scripts --}}
 <script src="{{ mix('/js/app.js') }}" defer></script>
 </body>
 </html>