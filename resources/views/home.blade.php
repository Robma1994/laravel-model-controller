@foreach ($movies as $movie) 
    <div class="container">
        <h1> {{ $movie['title'] }} </h1>
        <h2> {{$movie['original_title']}}</h2>
        <h3> {{$movie['nationality']}} </h3>
        <h3>{{$movie['date']}}</h3>
        <h3>{{$movie['vote']}}</h3>
    </div>
 
@endforeach
