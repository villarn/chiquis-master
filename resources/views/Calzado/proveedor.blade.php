@extends('layout')

@section('pageTitle') CALZADO - Proveedor @endsection

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
                                <label for="proveedorNombre">Nombre</label>
                                <input type="text" class="form-control" id="proveedorNombre" placeholder="Ingresar nombre de Proveedor">
                            </div>
                            <div class="form-group">
                                <label for="proveedorApellido">Apellido</label>
                                <input type="text" class="form-control" id="proveedorApellido" placeholder="Ingresar apellido de Proveedor">
                            </div>
                            <div class="form-group">
                                <label for="proveedorRazonSocial">Raz&oacute;n Social</label>
                                <input type="text" class="form-control" id="proveedorRazonSocial" placeholder="Ingresar Razón Social">
                            </div>
                            <div class="form-group">
                                <label for="razonSocial">Raz&oacute;n Social</label>
                                <select class="form-control" name="proveedor" id="selectProveedor">
                                    <option value="1">IVA Inscripto</option>
                                    <option value="2">IVA Excento</option>
                                    <option value="3">Monotributista</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cuitcuildni">CUIT-CUIL-DNI</label>
                                <input type="text" class="form-control" id="cuitcuildni" placeholder="Ingresar CUIT-CUIL-DNI (solo uno)">
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


