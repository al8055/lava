<!DOCTYPE html>
<html lang="en">
    <head>
        <title>I'm a LavaPlay App</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}" type="text/css" />
    </head>
    <body>
        <div id="mainapp">
            @yield('content')
        </div>
        <div>
            <p> ... </p>
        </div>
     <script src="{{ secure_asset('js/app.js') }}" type="text/js"></script>    
    </body>
</html>