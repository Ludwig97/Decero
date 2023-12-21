@include('layouts.header')

<body>
    <div>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div>
                <label for="name">Nombre</label>
                <input type="text"
                placeholder="nuevo nombre"
                name="name">
            </div>
            <div>
                <label for="email">email</label>
                <input type="email"

                placeholder="nuevo email"
                name="email">
            </div>

            <div>
                <label for="password">nuevo password</label>
                <input type="password"

                placeholder="nuevo password"
                name="password">
            </div>
            <div>
                <button type="submit">
                    <p class="text_boton">Crear</p>
                </button>
            </div>
        </form>
    </div>
</body>
<style>
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
    width:50%;
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
