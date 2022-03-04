<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="row justify-content-between">
            @foreach ($data as $movie)
            <div class="card col-2 m-3 p-4">
                <h5>Titolo: <span>{{$movie["title"]}}</span></h5>
                <h5>Titolo originale: <span>{{$movie["original_title"]}}</span></h5>
                <h5>Nazionalità: <span>{{$movie["nationality"]}}</span></h5>
                <h5>Data di uscita: <span>{{$movie["date"]}}</span></h5>
                <h5>Voto: <span>{{$movie["vote"]}}</span></h5>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>