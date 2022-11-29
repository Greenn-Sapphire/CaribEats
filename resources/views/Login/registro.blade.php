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
                Formulario de registro.
            </div>

            <div class="card-body container mb-4">
                <form class="container" method="POST" action="{{route('validar-registro')}}">
                    @csrf
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <label for="userInput" class="form-label">Nombre*</label>
                    <input  type="text" class="form-control" id="userInput" name="name" autocomplete="disable" value="{{old('name')}}"> <br>

                    <label for="lastnameInput" class="form-label">Apellido*</label>
                    <input  type="text" class="form-control" id="lastnameInput" name="lastname" autocomplete="disable" value="{{old('lastname')}}"><br>

                    <label for="mobileInput" class="form-label">Numero de telefono*</label>
                    <input type="number" class="form-control" id="mobileInput" name="mobile" autocomplete="disable" value="{{old('mobile')}}"><br>

                    <label for="emailInput" class="form-label">Correo Institucional</label>
                    <input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp", name ="email", autocomplete="disable" value="{{old('email')}}"><br>


                    <label for="passwordInput" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="passwordInput", name="password">

                    <br>
                    <center>
                        <div class="panel-footer">
					        <button type="submit" class="btn btn-success">Registrarse</button>
					        <a href="/">
					  	    <button type="button" class="btn btn-danger">
					  		<i class="far fa-times-circle"></i> CANCELAR
					  	    </button>
					        </a>
				        </div>
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
