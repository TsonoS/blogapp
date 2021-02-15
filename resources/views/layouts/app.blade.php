<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>{{config('app.name'), 'BLOGAPP'}}</title>

    <!-- TinyMCE EDITOR -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.0/tinymce.min.js"></script>
        <script>
        tinymce.init({
            selector:'textarea#body'
        });
    </script>

    </head>
    <body>
        @include('inc.navbar')
        <div class = "container">
            @include('inc.messages')
            @yield('content')
    </body>
</html>
