<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="{{url('css/login.css')}}" >
    <title>Caribeats</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <div class="container-fluid">
                    <a class="navbar-brand">
                        <h1>
                            <span class="badge bg-success"> Caribeats </span>
                        </h1>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <br><br>
    <div class="container">
        <div class="card text">
            <div class="card-header text-center">
                Inicio de sesion.
            </div>

            <div class="card-body container mb-4">
                <form class="container" method="POST" action = "{{route('inicia-sesion')}}">
                    @csrf

                    @if(session('success'))
                        <div class="alert alert-danger" role="success">
                            {{session('success')}}
                        </div>
                    @endif

                    <label for="emailInput" class="form-label">Correo Electronico</label>
                    <input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp", name ="email">

                    <div id="emailHelp" class="form-text">Accede con tu correo institucional proporcionado por la Universidad del caribe.</div>

                    @if($errors -> has('email'))
                        <span class="error text-danger" for="input-email">{{$errors->first('email')}}</span><br>
                    @endif
                    <br>

                    <label for="passwordInput" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="passwordInput", name="password">

                    <div id="passwordHelp" class="form-text">Si no recuerda su contraseña, contacte al departamento de sistemas.</div>
                    @if($errors -> has('password'))
                        <span class="error text-danger" for="input-password">{{$errors->first('password')}}</span><br>
                    @endif<br>

                    <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
                    <label for="rememberCheck" class="form-check-label">Mantener sesion iniciada</label><br><br>

                    <center>
                        <button type="submit" class="btn btn-success">Iniciar sesion</button>
                        <a type="submit" class="btn btn-success" href="/registro">Registrarse</a>
                    </center>
                </form>
            </div>

            <div class="card-footer text-muted">
                Universidad del Caribe © 2022
            </div>

        </div>
    </div>
</body>
</html>
