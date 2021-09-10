<h1>Hola, puedes resetear el password</h1>
<h2>ROCKSTAR</h2>
<form action="{{url('reset-password')}}" method="POST">
    @csrf
    Email:<input type="email" name="email"> <br>
    Nuevo Password: <input type="password" name="password"> <br>
    Confirmar password: <input type="password" name="password_confirmation">
    <input type="hidden" name="token" value="{{$token}}"> <br>      
    <button type="submit">Resetear</button>

</form>
