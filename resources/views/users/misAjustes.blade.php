@extends('layouts.public')
@section('content')
    <div class="row">
        <div class="col-12">
            <h4 class="title ps-3">Tus ajustes</h4>
        </div>
    </div>
    <br/>
    <br/>
    <div class="row">
        <div class="col-xl-10 offset-xl-1 d-flex justify-content-space-around flex-column">
        <div class="form-floating mb-3">
            <input type="text" class="form-control bg-dark" id="floatingInput" style="color: white;" value="{{$user->setting->acc_plan}}">
            <label for="floatingInput" style="font-size: 15px;">Plan of the Account</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control bg-dark" id="floatingPassword" style="color: white;" value="{{$user->setting->audio_quality}}">
            <label for="floatingInput" style="font-size: 15px;">Quality of the Audio</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control bg-dark" id="floatingPassword" style="color: white;" value="{{$user->setting->privacy}}">
            <label for="floatingInput" style="font-size: 15px;">Privacy</label>
        </div>
            <div>
                <input type="submit" class="form-control bg-dark btn btn-outline-light">
            </div>
        </div>
    </div>
    <br/>
@endsection
