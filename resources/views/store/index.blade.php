@extends('store.template')
@section('content') 
    @include('store.partials.slider')
    <div class="container text-center">
        <div id="products">
            @foreach ($products as $product)
                <div class="products white-panel">
                    <h3>{{ $product->name }}</h3>
                    <img src="{{ $product->image }}" width="250px">
                    <div class="product-info">
                        <p>{{ $product->description }}</p>
                        <h3> <span class="label label-success">Precio: ${{ number_format($product->price,2) }} </span> </h3>
                        <p>
                            <a href="{{ route('cart-add',$product->slug) }}" class="btn btn-warning"> 
                                <i class="fa fa-cart-plus"></i> Lo quiero
                            </a>
                            <a href="{{ route('product-detail',$product->slug) }}" class="btn btn-primary"> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Leer mas</a>
                        </p>
                    </div>
                </div>    
            @endforeach
        </div>
    </div>
@endsection