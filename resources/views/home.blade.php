<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @foreach ($movies as $movie) 
        
            <div class="card">
                <h1> {{ $movie['title'] }} </h1>
                <h2> {{$movie['original_title']}}</h2>
                <h3> {{$movie['nationality']}} </h3>
                <h3> {{$movie['date']}} </h3>
                <h3> {{$movie['vote']}} </h3>
            </div>
        
        @endforeach
    </div>
</body>
</html>

