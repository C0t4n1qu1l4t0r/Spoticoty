@extends('layouts.public')
@section('content')
    <div class="row">
        <div class="col-xl-10 offset-xl-1">
            <h2 class="title">{{$playlist->name}}</h2>
            <button class="btn btn-dark sf-btn-default">
                <!-- editar playlist -->
                <span class="fa fa-ellipsis-h"></span>
            </button>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-12">
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>ARTISTA</th>
                    <th>TÍTULO</th>
                    <th><span class="fa-regular fa-clock"></span></th>
                    </thead>
                    <tbody>
                    @foreach($playlist->songs as $a)
                    <tr>
                        <td>{{$a->id}}</td>
                        <td>{{$a->artists->name}}</td>
                        <td>{{$a->name}}</td>
                        <td>{{$a->duration}}</td>
                        <td></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
