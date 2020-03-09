@extends('layout')

@section('pageTitle') CALZADO - Marca @endsection

@section('content')

<div class="row">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <form role="form">
                            <div class="form-group">
                                <label for="marca">Marca</label>
                                <input type="text" class="form-control" id="marca" placeholder="Ingresar nombre de Marca">
                            </div>
                            <div class="form-group">
                                <label for="proveedor">Proveedor</label>
                                <select class="form-control" name="proveedor" id="selectProveedor">
                                    <option value="1">Proveedor 1</option>
                                    <option value="2">Proveedor 2</option>
                                    <option value="3">Proveedor 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="activoRadio" id="optionActivo" value="option1" checked="true">
                                        ACTIVO
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="activoRadio" id="optionActivo" value="false">
                                        NO Activo
                                    </label>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


