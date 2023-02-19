@extends('layouts.public')
@section('content')
<div class="row">
    <div class="col-12">
        <h4 class="title ps-3">Zona de Admin</h4>
    </div>
</div>
<br/>
<br/>
<div class="row">
    <div class="col-xl-10 offset-xl-1 d-flex justify-content-space-around">
        <div class="col-4 bg-dark card-body me-1">
            <a href="{{url('users/misPlaylists/' . Auth::id())}}"><h2 class="card-title title text-center">Tus playlists</h2></a>
        </div>
        <div class="col-4 bg-dark card-body ms-1">
            <a href="{{url('users/misArtistas/' . Auth::id())}}"><h2 class="card-title title text-center">Artistas Seguidos</h2></a>
        </div>
    </div>
</div>
<br/>
@endsection
