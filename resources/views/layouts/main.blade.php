<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fafef7980b.js" crossorigin="anonymous"></script>
    <title>Weather API</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container"> 
        <div id="app"> 
            @yield('content')
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>