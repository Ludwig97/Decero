<nav>
    <a class="nav_a" href="{{ route('user.index') }}">Mostrar Usuarios</a>
    <a class="nav_a" href="{{ route('user.create') }}">Crear Usuario</a>
</nav>
@include('layouts.header')
    <body class="antialiased">
        <h1 class="titulo">Inicio</h1>
        {{-- <div class="img">
            <img
            src="{{asset('images/logoinicio.jpg')}}"
            class="img-fluid rounded-top"
            alt="logo.inicio.jpg"
            />
        </div> --}}

    </body>
</html>
<style>
    body{
        background-color:#2a3b47;
    }
    nav{
        display: flex;
        display: inline-block;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 20px 20px;
        text-decoration: none;
        border-radius: 5px;
        margin: 10px auto;
    }
    .nav_a{
        font-size: 1.4rem;
        border-radius: 5px;
        margin: 10px 10px;
        justify-content: center;
        width: 100%;
        text-align: center;
        color: black;
    }
    .img{
        size: 40px;
        display: flex;
        flex-direction: row;
        align-items: center;
        align-content: center;
    }

</style>
