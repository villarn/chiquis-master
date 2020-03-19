@extends('layout')

@section('pageTitle') CLIENTES @endsection

@section('content')

  <form action="{{ route('clientes.create') }}" method="POST">
    @csrf
    <div class="col-md-6">
      <input type="text"
             name="nombre"
             placeholder="Ingresa el nombre"
             class="form-control mb-2"
             value="{{ old('nombre') }}">
      <input type="text"
             name="apellido"
             placeholder="Ingresa el apellido"
             class="form-control mb-2"
             value="{{ old('apellido') }}">
      <input type="text"
             name="email"
             placeholder="Ingresa la dirección de correo electrónico"
             class="form-control mb-2"
             value="{{ old('email') }}">
      <button class="btn btn-primary mb-2" type="submit">Agregar</button>
    </div>
  </form>

  @if(!$clientes->isEmpty())
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-2">LISTADO DE CLIENTES</h5>
              <table class="table table-hover">
                <thead>
                <tr>
                  <th scope="col">#</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Email</th>
                  <th class="text-right">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clientes as $cliente)
                  <tr>
                    <th scope="row">{{ $cliente->id }}</th>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->apellido}}</td>
                    <td>{{$cliente->email}}</td>
                    <td class="text-right">
                      <button class="pull-right btn btn-danger fa fa-trash-alt" data-toggle="modal"
                              data-target="#delete"></button>
                      <button class="pull-right btn btn-warning fa fa-edit" data-toggle="modal"
                              data-target="#edit"></button>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif

  {{--MODAL--}}
  <div class="modal modal-danger fade in" id="delete">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
            <span aria-hidden="true">X</span></button>
          <h4 class="modal-title"></h4>
        </div>
        <form action="{{ route('clientes.delete', $cliente->id) }}" method="post">
          @method('DELETE')
          @csrf
          <div class="modal-body">
            <p>¿Está seguro que desea eliminar el cliente <strong>"{{ $cliente->nombre . ' ' . $cliente->apellido }}
                "</strong>?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-danger">ELIMINAR</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  {{--MODAL--}}
  <div class="modal fade in" id="edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
            <span aria-hidden="true">X</span></button>
          <h4 class="modal-title"></h4>
        </div>
        <form action="{{ route('clientes.edit', $cliente) }}" method="post">
          @method('PUT')
          @csrf
          <div class="modal-body">
            <p>Editando el cliente con id: <strong>"{{ $cliente->id }}"</strong></p>
          </div>
          <div class="col-md-12">
            <input type="text"
                   name="nombre"
                   placeholder="Ingresa el nombre"
                   class="form-control mb-2"
                   value="{{ $cliente->nombre }}">
            <input type="text"
                   name="apellido"
                   placeholder="Ingresa el apellido"
                   class="form-control mb-2"
                   value="{{ $cliente->apellido }}">
            <input type="text"
                   name="email"
                   placeholder="Ingresa la dirección de correo electrónico"
                   class="form-control mb-2"
                   value="{{ $cliente->email }}">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-warning">Guardar cambios</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

@endsection
