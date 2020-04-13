<!DOCTYPE html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>

    <body>
        <div id="app">
            <counter-component></counter-component>
        </div>
    
        <script src=" {{ mix('js/app.js') }} "></script>
    </body>

</html>