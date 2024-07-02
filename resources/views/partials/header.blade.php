<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="h-container">
        <a @if (Route::currentRouteName() == 'home') class='active head-a' @else class="head-a" @endif
            href="{{ route('home') }}">Home</a>
        <a @if (Route::currentRouteName() == 'about') class='active head-a' @else class="head-a" @endif
            href="{{ route('about') }}">About Us</a>
    </div>
</body>

</html>
