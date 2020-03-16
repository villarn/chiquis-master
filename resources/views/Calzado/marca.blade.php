@extends('layout')

@section('pageTitle') CALZADO - Marca @endsection

@section('content')

    @if (@session('mensaje'))
        <div class="alert alert-success alert-dismissible ">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>{{@session('mensaje')}}</strong>
        </div>
    @endif




    <div class="row">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <form role="form" action="{{route ('marca_nuevo')}}" method="POST">
                            @csrf
                            @error('descripcion')
                            <div class="alert alert-danger alert-dismissible">El nombre de la Marca es obligatorio</div>
                            @enderror
                            @error('activo')
                            <div class="alert alert-danger alert-dismissible">Debe seleccionar una opci&oacute;n Activo/No Activo</div>
                            @enderror
                            @error('marcaProveedor')
                            <div class="alert alert-danger alert-dismissible">El proveedor es obligatorio de completar</div>
                            @enderror
                            <div class="form-group">
                                <label for="marca">Marca</label>
                                <input type="text" name="marcaDescripcion" class="form-control" id="marca" placeholder="Ingresar nombre de Marca">
                            </div>
                            <div class="form-group">
                                <label for="proveedor">Proveedor</label>
                                <select class="form-control" name="marcaProveedor" id="selectProveedor">
                                    <option value="1">Proveedor 1</option>
                                    <option value="2">Proveedor 2</option>
                                    <option value="3">Proveedor 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="marcaActivo" id="optionActivo" value="1" checked="true">
                                        ACTIVO
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="marcaActivo" id="optionActivo" value="0">
                                        NO Activo
                                    </label>
                                </div>
                            </div>
                            <div class="box-footer text-right">
                                <button type="submit" class="btn btn-primary">Agregar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--LISTADO--}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-2">LISTADO DE MARCAS EXISTENTES</h5>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th>Nombre</th>
                                <th>Proveedor</th>
                                <th>Activo</th>
                                <th class="text-right">Acci&oacute;n</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($marcas as $marca)
                                <tr>
                                    <th scope="row">{{ $marca->id }}</th>
                                    <td class="col-md-3">{{$marca->descripcion}}</td>
                                    <td class="col-md-3">{{$marca->proveedor_id}}</td>

                                    <td class="text-center col-md-1"><div class="custom-control custom-switch">
                                            <input type="checkbox" @if($marca->activo == 1) checked @endif class="custom-control-input" disabled id="customSwitch2">
                                            <label class="custom-control-label" for="customSwitch2"></label>
                                        </div></td>
                                    <td class="text-right">
                                        <button class="pull-right btn btn-danger fa fa-trash-alt" data-toggle="modal" data-target="#delete"></button>
                                        <a href="{{route('marca_editar',$marca->id)}}" class="pull-right btn btn-warning fa fa-edit"></a>
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
</div>

{{--MODAL--}}
<div class="modal modal-danger fade in" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <form action="{{route('marca_eliminar', $marca->id)}}" method="post">
                @method('delete')
                @csrf
                <div class="modal-body">
                    <p>Esta Seguro de eliminar la marca <strong>"{{$marca->descripcion}}"</strong>?</p>
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

@endsection


