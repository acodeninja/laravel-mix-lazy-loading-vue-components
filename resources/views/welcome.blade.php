<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app" class="py-3">
            <div class="flex-center position-ref full-height">
                <example-component></example-component>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
