<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App name - @yield('title')</title>
</head>

<body>
    @section('sidebar')
        <p>Ma section parent</p>
    @show
    <div class="container">
        @yield('contenu')
    </div>
</body>

</html>
