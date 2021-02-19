@extends('index')
@section('content')
<div class="section">
    <div class="row">
        @csrf
        <input hidden id="movieId" value="{{$movie->id}}">
        <div class="row valign-wrapper">
            <div class="col s4 center">
                <span class="inf-text">
                    <img class="w-100" data-position="right" src="{{asset($movie->image)}}">
                </span>
            </div>
            <div class="col s8">
                <div class="row">
                    <div class="col s12">
                        <h4><strong>{{$movie->title}}</strong></h4>
                    </div>
                    <div class="col s12">
                        <p class="flow-text" style="font-size: 15px !important;">
                            {{$movie->description}}
                        </p>
                    </div>
                    <div class="col s12">
                        <p class="flow-text" style="font-size: 15px !important;">
                            Year: {{$movie->year}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="textComment" class="materialize-textarea"></textarea>
                <label for="textComment">Comment</label>
                <a class="btn" id="sendComment">Send Comment</a>
            </div>
        </div>
    </div>
    <div class="row">
        <h4>Comments</h4>
        <div class="col s12" id="comments">
        </div>
    </div>
</div>

@endsection