@extends('layouts.mylayout')

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
    <h1 class="title">Comics:</h1>
    @section('content')
        @foreach ($arrayFumetti as $id => $fumetto)
            <div class="card">
                <h3 class="mb-1">{{ $fumetto['title'] }}</h3>
                <img src="{{ $fumetto['thumb'] }}" alt="">
                <a href="/home/{{ $id }}"> > Read More < </a>
            </div>
        @endforeach
    @endsection

</body>

</html>
