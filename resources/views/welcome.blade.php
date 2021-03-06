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
    <div class="flex-center position-ref full-height">

        <form method="POST" action="{{route('aniadirUsuario')}}">
            @csrf
            <input type="text" name="nombre" id="nombre"> {{--Lo que se guarda en el post es el campo name, por lo que este
            tambien tiene que ser unico--}}
            <input type="submit" value="Añadir"> {{--Al hacer type submit nos coge directamente como si fuera un boton, por
            lo que usaremos esto--}}
            
        </form>
        
        <form method="GET" action="{{route('/borrar')}}">
            @csrf
            <input type="submit" value="Borrar"> {{--Al hacer type submit nos coge directamente como si fuera un boton, por
            lo que usaremos esto--}}
            
        </form>


        <form method="GET" action="{{route('/actualizar')}}">
            @csrf
            <input type="submit" value="Actualizar">
        </form>


    </div>
</body>

</html>