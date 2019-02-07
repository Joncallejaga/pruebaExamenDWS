<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div>
        {{-- Mostramos todo --}}
        @foreach ($todos_usuarios['alumnos'] as $alumno) @foreach ($todos_usuarios['usuarios'] as $usuario) @if($usuario['id']==$alumno['id_usuario'])
        <form method="POST" action="{{route('actualizarAlumno')}}">
            @csrf
            <input type="text" name="nombre" id="nombre" value="{{$usuario['username']}}">
            <input type="hidden" name="id_alumno" value="{{$alumno['id']}}">
            <select name="id_profesor">
                    @foreach ($todos_usuarios['profesores'] as $profesor)
                    <option
                    @if($alumno['id_profesor']==$profesor['id'])
                    selected
                    @endif
                    {{-- Mostramos los profesores otra vez para validar --}}
                    @foreach ($todos_usuarios['usuarios'] as $usuario)
                        @if($usuario['id']==$profesor['id_usuario'])
                            value="{{$profesor['id']}}">{{$usuario['username']}}</option>
                            @endif
                            @endforeach
                            @endforeach
                        </select>
            <input type="submit" name="actualizar" value="Actualizar">


        </form>
        @endif @endforeach @endforeach
        <form method="GET" action="{{route('/')}}">
            @csrf
            <input type="submit" value="Volver">
        </form>
    </div>
    </div>
</body>

</html>