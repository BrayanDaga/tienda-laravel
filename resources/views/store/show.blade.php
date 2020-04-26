@extends('store.template')
@section('content')
<div class="container">
    <div class="page-header text-center">
        <h1> <i class="fa fa-shopping-cart"></i>Detalle de Producto</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="product-block">
                <img src="{{ $product->image }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-block">
                <h3>{{ $product->name }}</h3>
                <div class="product-info panel text-center">
                    <p>{{ $product->description }}</p>
                    <h3> <span class="label label-success">Precio: ${{ number_format($product->price,2) }}</span> </h3>
                    <p>
                        <a href="{{ route('cart-add',$product->slug) }}" class="btn btn-warning btn-block">
                            <i class="fa fa-cart-plus"></i> La quiero
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <hr>
   <p><a href="/"  class="btn btn-primary"> <i class="fa fa-chevron-circle-left"></i> Regresar</a></p>
</div>

@endsection
