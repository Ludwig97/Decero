@include('layouts.header')
<h1>Editar Usuario</h1>
<form action="{{ route('user.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Nombre</label>
        <input type="text" required placeholder="Nuevo nombre" name="name" value="{{ old('name', $user->name ) }}">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" required placeholder="Nuevo email" name="email" value="{{ old('name', $user->email ) }}">
    </div>

    <div>
        <label for="password">Nuevo password (deja en blanco para no cambiar)</label>
        <input type="password" placeholder="Nuevo password" name="password">
    </div>

    <div>
        <button type="submit">
            <p class="text_boton">Actualizar</p>
        </button>
    </div>

</form>


<style>
    h1{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        color: white;
    }
    body{
        background-color:#2a3b47;
    }
    form{
        padding: 2%;
        background-color: gray;
        margin: 0 auto;
        width: 300px;
        opacity: 80%;
        border-radius: 5%;
    }
    label{
        padding: 10px;
        margin: 0 auto;
        font-size: 1.5rem
    }
    input{
        padding: 10px;
        margin: 10px 10px;
        font-size: 1.2rem;
        background-color:whitesmoke;
    }
    button{

        margin: 0.7rem auto;
        padding: 20px 20px;
        background-color: #3498db;
        width:100%;
        border-radius: 10%;
        cursor: pointer;

    }
    button:hover {
        background-color: #45a049;
        border-color: #39843f;
    }
    .text_boton{
        font-size: 2rem;
        text-align: center;
        font-weight: bold;
        color: black;
    }
    </style>
