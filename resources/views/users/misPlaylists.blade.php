@extends('layouts.public')
@section('content')
    <div class="row">
        <div class="col-12">
            <h4 class="title ps-3">Tus playlists</h4>
        </div>
    </div>
    <br/>
    <br/>
    <div class="row">
        <div class="col-xl-10 offset-xl-1 d-flex justify-content-space-around">
            @foreach($user->playlists as $a)
                <div class="col-4 bg-dark card-body me-1">
                    <a href="{{url('playlist/' . $a->id)}}"><h2 class="card-title title text-center">{{$a->name}}</h2></a>
                </div>
            @endforeach
        </div>
    </div>
    <br/>
@endsection
