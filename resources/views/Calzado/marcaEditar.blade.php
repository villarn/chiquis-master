@extends('layout')

@section('pageTitle') CALZADO - Editar Marca @endsection

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
                        <h5 class="card-title mb-2"></h5>
                        <form role="form" action="{{route ('marca_update', $marca->id)}}" method="POST">
                            @method('PUT')
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
                                <input type="text" required name="marcaDescripcion" class="form-control" id="marca" placeholder="Ingresar nombre de Marca" value="{{$marca->descripcion}}">
                            </div>
                            <div class="form-group">
                                <label for="proveedor">Proveedor</label>
                                <select class="form-control" name="marcaProveedor" id="selectProveedor">
                                    <option value="1" @if($marca->proveedor_id == 1) selected @endif>Proveedor 1</option>
                                    <option value="2" @if($marca->proveedor_id == 2) selected @endif>Proveedor 2</option>
                                    <option value="3" @if($marca->proveedor_id == 3) selected @endif>Proveedor 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="marcaActivo" id="optionActivo" value="1" @if($marca->activo) checked @endif>
                                        ACTIVO
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="marcaActivo" id="optionActivo" value="0" @if(!$marca->activo) checked @endif>
                                        NO Activo
                                    </label>
                                </div>
                            </div>
                            <div class="box-footer text-right">
                                <a href="{{route('marca')}}" class="btn btn-default">Volver</a>
                                <button type="submit" class="btn btn-warning">Confirmar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


