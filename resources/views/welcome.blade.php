<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
    
    <title>TAXI</title>

    <!-- Icons -->
    <link rel="shortcut icon" href="{{asset('img/taxi.png')}}">
    <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/simple-line-icons.css')}}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">

</head>

<body class="app flex-row align-items-center home_taxi">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-5">
                <div class="card-group mb-0">
                    <div class="card p-4">
                        <div class="card-block">
                            <h1 class="t_taxi">Iniciar Sessión</h1>
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-user"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Usuario" id="usuario">
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                                <input type="password" class="form-control" placeholder="Contraseña" id="clave">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                    <button type="button" id="btn_login" class="btn btn_taxi px-4">Ingresar</button>
                                </div>
                                <div class="col-6 text-right">
                                    <button type="button" class="btn btn-link px-0">Olvido su Clave?</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and necessary plugins -->
     <script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/tether/dist/js/tether.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/login.js')}}"></script>
</body>
</html>