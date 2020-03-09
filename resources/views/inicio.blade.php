@extends('layout')

@section('estilado')
<link rel="stylesheet" href="{{ url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
@endsection


@section('pageTitle')
Pagina Incial
@endsection

@section('content')

<h3>Estad&iacute;sticas</h3>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>350</h3>
                        <p>Ventas del Mes</p>
                        <p>Mes {{now()->monthName}}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
{{--                        <h3>53<sup style="font-size: 20px">%</sup></h3>--}}
                        <h3>1600</h3>
                        <p>Unidades Stock</p>
                        <p>Mes {{now()->monthName}}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>
                        <p>Nuevos Clientes</p>
                        <p>Mes {{now()->monthName}}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Proveedores</p>
                        <p>Mes {{now()->monthName}}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection


