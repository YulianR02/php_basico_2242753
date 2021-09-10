<h1>Hola, ingresa tu correo</h1>
<form action="{{url('enviar-link')}}" method="POST">
    @csrf
    Tu Correo:<input type="email" name="email"> <br>
    <button type="submit">Confirmar</button>

</form>
