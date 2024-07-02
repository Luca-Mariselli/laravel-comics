<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <div class="container-more">
        <div class="card-more">

            <img class="mb-1" src="{{ $comic['thumb'] }}" alt="">
            <h1 class="mb-1">{{ $comic['title'] }}</h1>
            <div class="mb-1">{{ $comic['description'] }}</div>
            <h4>Price: {{ $comic['price'] }}</h4>
        </div>
    </div>
</body>

</html>
