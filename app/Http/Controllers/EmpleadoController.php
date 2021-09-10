<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empleado;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Echo_;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index for customer
        $empleados = empleado::orderBy('EmployeeId','DESC')->paginate(10);
        return view('empleados.index')->with("empleados", $empleados);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create view for create
        return view('empleados.create');
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
            return redirect('empleados/create')->withErrors($validador)->withInput();
        }
        //
        $maxempleado=empleado::all()->max('EmployeeId');
        $maxempleado++;
        //crear el nuevo recurso del empleado:
        $nuevoempleado=new empleado();
        $nuevoempleado->EmployeeId=$maxempleado;
        $nuevoempleado->FirstName=$request->input("nombre");
        $nuevoempleado->LastName=$request->input("apellido");
        $nuevoempleado->Email=$request->input("email");
        $nuevoempleado->save();
        return redirect('empleados')->with('mensaje_exito','empleado Registrado Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Show for empleados
        $empleado = empleado::find($id);
        return view('empleados.show')->with("empleado", $empleado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado=empleado::find($id);
        return view('empleados.edit')->with('empleado',$empleado);
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
        return redirect("empleados/$id/edit")->withErrors($validador)->withInput();
    }
        //seleccion del recurso a modificar
        $empleado=empleado::find($id);
        //actualizar el estado del recurso
        //en virtud de los datos que vengan desde el formulario
        $empleado->FirstName=$request->input('nombre');
        $empleado->LastName=$request->input('apellido');
        $empleado->Email=$request->input('email');
        $empleado->save();
        //variables de sesion flash
        return redirect('empleados')->with('mensaje_exito','empleado Actualizado Exitosamente');
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
        $empleado = empleado::findOrFail($id)->delete();
        return back()->with('mensaje_exito','empleado Eliminada Exitosamente');
    }
}
