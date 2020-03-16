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
        $marcas = Marca::all()->sortBy('descripcion', 1, true);
        return view('Calzado.marca', compact('marcas'));
    }

    public function nuevo(Request $request){
//        return($request->all());

        //validacion
        $request->validate([
           'marcaDescripcion' => 'required',
           'marcaProveedor' => 'required',
           'marcaActivo' => 'required'
        ]);

        $nuevaMarca = new Marca();
        $nuevaMarca->descripcion = $request->marcaDescripcion;
        $nuevaMarca->proveedor_id = $request->marcaProveedor;
        $nuevaMarca->activo = $request->marcaActivo;

        $nuevaMarca->save();

        return back()->with('mensaje','Se agrego una nueva marca');


    }

    public function editar($id){

        $marca = Marca::query()->findOrFail($id);
//        $marcas = Marca::query()->all();
        return view('Calzado.marcaEditar', compact('marca'));

    }

    public function update(Request $request, $id){

        $request->validate([
            'marcaDescripcion' => 'required',
            'marcaProveedor' => 'required',
            'marcaActivo' => 'required'
        ]);

        $marcaEditar = Marca::query()->findOrFail($id);

        $marcaEditar->descripcion = $request->marcaDescripcion;
        $marcaEditar->proveedor_id = $request->marcaProveedor;
        $marcaEditar->activo = $request->marcaActivo;

        $marcaEditar->save();


        return back()->with('mensaje','Se Modificó con exito la Marca');
    }

    public function eliminar(Request $request, $id){
//        $marcaEliminar = Marca::query()->findOrFail($id);
        return back()->with('mensaje','Se ELIMINO con exito la Marca '. $id);
    }
}
