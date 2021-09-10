<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Echo_;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index for customer
        $clientes = cliente::orderBy('CustomerId','DESC')->paginate(10);
        return view('clientes.index')->with("clientes", $clientes);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create view for create
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validacion
        //VALIDACION REGLAS
        $reglas=[
                "nombre"=>'required|alpha|min:3|max:10',
                "apellido"=>'required|alpha|min:4|max:10',
                "email"=>'required|email',

        ];

        //MENSAJES VALIDACION
        $mensajes=[
            "required"=>"Campo requerido",
            "alpha"=>"El campo debe contener solo letras",
            "email"=>"El campo tiene que ser de caracter EMAIL",
            "max"=>"Debe tener maximo :max caracteres",
            "min"=>"Debe tener minimo :min caracteres"

        ];


        //OBJETO
        $validador = validator::make($request->all(), $reglas, $mensajes);

        //Realizar validacion
        if ($validador->fails()){
            //Falla
            return redirect('clientes/create')->withErrors($validador)->withInput();
        }
        //
        $maxcliente=Cliente::all()->max('CustomerId');
        $maxcliente++;
        //crear el nuevo recurso del cliente:
        $nuevocliente=new Cliente();
        $nuevocliente->CustomerId=$maxcliente;
        $nuevocliente->FirstName=$request->input("nombre");
        $nuevocliente->LastName=$request->input("apellido");
        $nuevocliente->Email=$request->input("email");
        $nuevocliente->save();
        return redirect('clientes')->with('mensaje_exito','Cliente Registrado Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Show for clientes
        $cliente = cliente::find($id);
        return view('clientes.show')->with("cliente", $cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente=Cliente::find($id);
        return view('clientes.edit')->with('cliente',$cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //validacion
        //VALIDACION REGLAS
        $reglas=[
            "nombre"=>'required|alpha|min:3|max:10',
            "apellido"=>'required|alpha|min:4|max:10',
            "email"=>'required|email',

    ];

    //MENSAJES VALIDACION
    $mensajes=[
        "required"=>"Campo requerido",
        "alpha"=>"El campo debe contener solo letras",
        "email"=>"El campo tiene que ser de caracter EMAIL",
        "max"=>"Debe tener maximo :max caracteres",
        "min"=>"Debe tener minimo :min caracteres"

    ];


    //OBJETO
    $validador = validator::make($request->all(), $reglas, $mensajes);

    //Realizar validacion
    if ($validador->fails()){
        //Falla
        return redirect("clientes/$id/edit")->withErrors($validador)->withInput();
    }
        //seleccion del recurso a modificar
        $cliente=Cliente::find($id);
        //actualizar el estado del recurso
        //en virtud de los datos que vengan desde el formulario
        $cliente->FirstName=$request->input('nombre');
        $cliente->LastName=$request->input('apellido');
        $cliente->Email=$request->input('email');
        $cliente->save();
        //variables de sesion flash
        return redirect('clientes')->with('mensaje_exito','Cliente Actualizado Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //create for delete subcategories
        $cliente = cliente::findOrFail($id)->delete();
        return back()->with('mensaje_exito','Cliente Eliminada Exitosamente');
    }

    public function habilitar($id){
        //establecer el estado del cliente(null, 1=activo, 0= inactivo)
        $cliente = Cliente::find($id);
        switch($cliente->habilitado){
            case null: $cliente->habilitado = 1;
            $cliente->save();
            $mensaje="El cliente $cliente->FirstName $cliente->LastName ha sido activado";
            break;

            case 1: $cliente->habilitado = 2;
            $cliente->save();
            $mensaje= "El cliente $cliente->FirstName $cliente->LastName ha sido Desactivado";
            break;

            case 2: $cliente->habilitado = 1;
            $cliente->save();
            $mensaje= "El cliente $cliente->FirstName $cliente->LastName ha sido activado";
            break;


        }
        //redireccinar a la ruta por defecto (index: 'listado_clientes')
        //con un mensaje de exito

        return redirect('clientes')->with('mensaje_exito', $mensaje);
    }
}
