@include('layouts.header')

<body>
    <div  class="nav">
         <a class="nav_a" href="{{ route('user.create') }}">Crear Nuevo Usuario</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $key => $item )
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        @if($item->status == 1)
                        <p class="activo">activo</p>
                        @else
                        <p class="inactivo">inactivo</p>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('user.edit', $item->id) }}" >
                            @csrf
                            <button type="submit">
                                Editar
                            </button>
                            </form>
                    </td>
                    <td>
                        <form action="{{ route('user.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            Eliminar
                        </button>
                        </form>
                    </td>
                </tr>
            @endforeach


            @if(session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
            @endif
        </div>

        </tbody>
    </table>

</body>
<style>
    .alert{
        display: flex;
        flex-direction: row;
        align-content: center;
        background-color: rgb(124, 230, 165);
        border: solid 2px rgb(31, 83, 44);
        align-items: center;
        max-width: 20%;
        margin: 1rem;
    }
    .nav_a{

        justify-content: center;
        width: 100%;
        text-align: center;
        color: black;

    }
    .nav{
        display: flex;
        display: inline-block;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 10px 20px;
        background-color: #3498db;
        text-decoration: none;
        border-radius: 5px;
        margin: 10px auto;

    }
    body{
        background-color:#2a3b47;
    }
    table{
        width: 60%;
        background: #2a3b40;
        margin: 0 auto;
    }
    th{
        text-align: center;
    }
    td {
        text-align: center;
    border: 1px solid #ddd; /* Añadir un borde de 1 píxel y color gris claro a todas las celdas */
    padding: 8px; /* Añadir espacio alrededor del contenido de las celdas */
    }
    .activo{
        color: green;
    }
    .inactivo{
        color: red;
    }
    .editar, .eliminar{
        text-align: center;
        color: black;
    }
</style>
