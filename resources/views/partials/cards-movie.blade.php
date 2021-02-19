@extends('index')
@section('content')
<div class="section">
    <div class="row">
        @foreach($movies as $movie)
        <div class="col s3 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset($movie->image) }}">
                    <span class="card-title bg-color-title">{{$movie->title}}</span>
                    <a href="movie/{{$movie->id}}"
                    class="btn-floating halfway-fab waves-effect waves-light red tooltipped"
                    data-position="bottom" data-tooltip="See More"><i class="material-icons">send </i></a>
                </div>
                <div class="card-content">
                    <p>{{mb_strimwidth($movie->description, 0, 44 , " ...")}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection