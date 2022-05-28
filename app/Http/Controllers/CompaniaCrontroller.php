<?php

namespace App\Http\Controllers;

use App\Models\Compania;
use Exception;
use Illuminate\Http\Request;

class CompaniaCrontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Compania::latest()->paginate(10);

        return view('compania.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compania.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $reglas = [
            'nombre' => 'required',
            'logo'      => 'image|mimes:jpg,png,jpeg,gif,svg|dimensions:min_width=100,min_height=100|max:2048',
        ];

        $mensajes = [
            'required' => 'El campo :attribute es obligatorio',
            'image' => 'El campo :attribute debe ser una imagen',
        ];





        $compania = $request->all();


        $this->validate($request, $reglas, $mensajes);

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('public/companies');
            $file = $request->file('logo');
            $name = $file->hashName(); // Generate a unique, random name...
            $compania['logo'] = $name;
        }




        Compania::create($compania);

        return redirect()->route('companias.index')
            ->with('success', 'Compañia creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('companias.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Compania $compania)
    {
        return view('compania.edit', compact('compania'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compania $compania)
    {   
        $reglas = [
            'nombre' => 'required',
            'logo'      => 'image|mimes:jpg,png,jpeg,gif,svg|dimensions:min_width=100,min_height=100|max:2048',
        ];

        $mensajes = [
            'required' => 'El campo :attribute es obligatorio',
            'image' => 'El campo :attribute debe ser una imagen',
        ];
        $this->validate($request, $reglas, $mensajes);

        $compania->update($request->only(['nombre', 'correo', 'pagina_web']));

        if ($request->hasFile('logo')) {

            $path = $request->file('logo')->store('public/companies');
            $file = $request->file('logo');
            $name = $file->hashName(); // Generate a unique, random name...
            if ($compania->logo != '') {
                try {
                    unlink(storage_path('app/public/companies/' . $compania->logo));
                } catch (Exception $e) {
                    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
                }
            }
            $compania->update(['logo' => $name]);
        }


        return redirect()->route('companias.index')
            ->with('success', 'Compañia actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compania $compania)
    {
        try {
            $compania->delete();
        } catch (Exception $e) {

            return redirect()->route('companias.index')
            ->with('success', 'Excepción capturada: '.$e->getMessage());
           
        }
       

        return redirect()->route('companias.index')
            ->with('success', 'Compañia borrada correctamente');
    }
}
