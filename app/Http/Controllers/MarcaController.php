<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca as Marca;
use Illuminate\Database\Eloquent;

class MarcaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $marcas = Marca::all();
        return view('Calzado.marca', compact('marcas'));
    }

    public function nuevo(Request $request){
//        return($request->all());
        $nuevaMarca = new Marca();
        $nuevaMarca->descripcion = $request->marcaDescripcion;
        $nuevaMarca->proveedor_id = $request->marcaProveedor;
        $nuevaMarca->activo = $request->marcaActivo;

        $nuevaMarca->save();

        return back()->with('mensaje','Se agrego una nueva marca');


    }

    public function editar($id){
        $marca = Marca::query()->findOrFail($id);
        return view('Calzado.marcaEditar', compact('marca'));

    }
}
