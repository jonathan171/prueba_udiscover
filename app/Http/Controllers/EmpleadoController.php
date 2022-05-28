<?php

namespace App\Http\Controllers;

use App\Models\Compania;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Empleado::latest()->paginate(10);
    
        return view('empleado.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create')->with('companies',Compania::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas =[
            'primer_nombre' => 'required',
            'apellido'      => 'required',
            'correo'        => 'required|email',
            'compania_id'   => 'required'
        ];

        $mensajes = [
            'required' => 'El campo :attribute es obligatorio',
            'unique' => 'El campo :attribute ya existe',
            'email' => 'El campo :attribute debe ser un correo',
        ];

        $this->validate($request,$reglas,$mensajes);
    
        Empleado::create($request->all());
     
        return redirect()->route('empleados.index')
                        ->with('success','Empleado creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        $companies = Compania::all();
        return view('empleado.edit')
             ->with('empleado',$empleado)
             ->with('companies',$companies);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $reglas =[
            'primer_nombre' => 'required',
            'apellido'      => 'required',
            'correo'        => 'required|email',
            'compania_id'   => 'required'
        ];

        $mensajes = [
            'required' => 'El campo :attribute es obligatorio',
            'unique' => 'El campo :attribute ya existe',
            'email' => 'El campo :attribute debe ser un correo',
        ];

        $this->validate($request,$reglas,$mensajes);

      
    
        $empleado->update($request->all());
    
        return redirect()->route('empleados.index')
                        ->with('success','empleado actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
