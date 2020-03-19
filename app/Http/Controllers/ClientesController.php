<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use function GuzzleHttp\Promise\all;

class ClientesController extends Controller {
  public function index() {
    $clientes = App\Cliente::all();

    return view('clientes.clientes', compact('clientes'));
  }

  public function create(Request $request) {

    $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'email' => 'required|email'
    ]);

    $clienteNuevo = new App\Cliente;
    $clienteNuevo->nombre = $request->nombre;
    $clienteNuevo->apellido = $request->apellido;
    $clienteNuevo->email = $request->email;

    $clienteNuevo->save();

    return back();
  }

  public function update(Request $request, $id) {

    $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'email' => 'required|email'
    ]);

    $clienteUpdate = App\Cliente::findOrFail($id);
    $clienteUpdate->nombre = $request->nombre;
    $clienteUpdate->apellido = $request->apellido;
    $clienteUpdate->email = $request->email;

    $clienteUpdate->save();

    return back();
  }

  public function delete($id) {
    $clienteDelete = App\Cliente::findOrFail($id);
    $clienteDelete->delete();

    return back();
  }
}
