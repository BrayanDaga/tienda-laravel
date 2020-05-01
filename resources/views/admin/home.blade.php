@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fas fa-rocket"></i>MY LARAVEL STORE - DASHBOARB</h1>
            <hr>
            <h2>Bienvenido(a) {{ \Auth::user()->user}} <i class="fas fa-rocket"></i> al Panel de admistración de tu tienda en línea</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel">
                    <i class="fas fa-list-alt  icon-home"></i>
                    <a href="/category" class="btn btn-warning btn-block btn-home-admin">CATEGORÍAS</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel">
                    <i class="fas fa-shopping-cart icon-home"></i>
                    <a href="" class="btn btn-warning btn-block btn-home-admin">PRODUCTOS</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel">
                    <i class="fas fa-paypal icon-home"></i>
                    <a href="" class="btn btn-warning btn-block btn-home-admin">PEDIDOS</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel">
                    <i class="fas fa-users  icon-home   "></i>
                    <a href="" class="btn btn-warning btn-block btn-home-admin">USUARIOS</a>
                </div>
            </div>
        </div>
    </div>

@endsection
