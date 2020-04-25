<style>
.table-cart
{
    background: #fff;
    border-radius: 1em;
    margin-bottom: 30px;
    padding: 1em;
}
.table-cart img
{
    width: 50px;
}
</style>
@extends('store.template')
@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-shopping-cart"></i>Carrito de compras</h1>
        </div>
        <div class="table-cart">
            @if (count($cart))
                <p>
                    <a href="{{ route('cart-trash') }}" class="btn btn-danger">
                        Vaciar carrito
                    </a>
                </p>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <th>Imagen</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                        <th>Quitar</th>
                        
                    </thead>
                    <tbody>
                        @foreach ($cart as $item)
                        <tr>
                            <td><img src="{{ $item->image }}"></td>
                            <td>{{ $item->name }}</td>
                            <td>${{ number_format($item->price,2) }}</td>
                            <td> 
                                <input type="number"
                                 name="" 
                                 min="1" max="100"
                                 value="{{ $item->quantity }}"
                                 id="product_{{ $item->id }}"
                                 >
                                 <a class="btn btn-warning btn-update-item"
                                 data-href="{{ route('cart-update',$item->slug) }}"
                                 data-id="{{ $item->id }}"
                                 >
                                    <i class="fas fa-sync"></i>
                                </a>
                                 </td>
                            <td>${{ number_format($item->price * $item->quantity,2) }}</td>
                            <td>
                                <a href="{{ route('cart-delete',$item->slug) }}" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <h3>
                    <span class="label label-success">Total: ${{ number_format($total,2) }}</span>
                </h3>
            </div>
            @else
                <h3><span class="label label-warning">No hay productos en el carrito :()</span></h3>
            @endif
            <hr>
            <p>
                <a href="/" class="btn btn-primary"> <i class="fa fa-chevron-circle-left"></i> Seguir comprando </a>
                <a href="{{ route('order-detail') }}" class="btn btn-primary">Continuar <i class="fa fa-chevron-circle-right"></i> </a>
                
            </p>
        </div>
    </div>
@endsection