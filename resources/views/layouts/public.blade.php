<html>
<head>
    <title>Spoticoty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bd4e680afc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset ('css/style.css')}}"/>
</head>
<body>
<div class="container-fluid">
    {{--barra lateral--}}
    <div class="row">
        <div class="col-2 sf-gray-primary">
            <ul class="list-group">
                <li class="list-group-item sf-list-group-item">
                    <span class="fa fa-home pe-1"></span>
                    <a href="/">Inicio</a>
                </li>
            </ul>

            <ul class="list-group">
                <li class="list-group-item sf-list-group-item"><a href="{{url('artists/index')}}">Artistas</a></li>
                <li class="list-group-item sf-list-group-item"><a href="{{url('playlists/index')}}">Playlists</a></li>
            </ul>
            <br/><br/>
        </div>

        <div class="col-10 sf-playlist">

            {{--user--}}
            @if(Auth::user())
            <div class="row">
                <br/>
                <div class="d-flex flex-row-reverse">
                    <div class="dropdown">
                        <button style="font-size: 20px;" class="btn dropdown-toggle sf-dropdown" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </button>
                        <div class="dropdown-menu sf-dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item sf-dropdown-item" href="{{url('users/misAjustes/' . Auth::id())}}">Ajustes de Cuenta</a>
                            <a class="dropdown-item sf-dropdown-item" href="{{url('logout')}}">Cerrar Sesion</a>
                        </div>
                    </div>
                </div>

                <br/>
            </div>
            @endif
            {{--content--}}
            @yield('content')
            {{--fondo del reproductor--}}
        </div>

    {{--reproductor--}}
    <div class="row sf-gray-secondary col-12">
        <div class="col-2">
            <br/>
            <label class="sf-name-music">Mead Song - Brother of Metal</label><br/>
            <label><span class="fa fa-heart-o"></span></label>
            <br/>
        </div>
        <div class="col-8">
            <div style="text-align: center; margin-top: 10px">
                <button class="btn sf-btn-control">
                    <span class="fa fa-random"></span>
                </button>

                <button class="btn sf-btn-control">
                    <span class="fa fa-step-backward"></span>
                </button>

                <button class="btn sf-btn-control">
                    <span class="fa fa-play sf-btn-play"></span>
                </button>

                <button class="btn sf-btn-control">
                    <span class="fa fa-step-forward"></span>
                </button>

                <button class="btn sf-btn-control">
                    <span class="fa fa-retweet"></span>
                </button>

                <br/>
                <div class="progress sf-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
