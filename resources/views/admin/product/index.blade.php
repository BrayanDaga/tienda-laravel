@extends('admin.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i> PRODUCTOS
                <a href="Aproduct/create" class="btn btn-warning">
                    <i class="fa fa-plus-circle"></i> Producto
                </a>
            </h1>
        </div>

        <div class="page">

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Categoría</th>
                            <th>Extracto</th>
                            <th>Precio</th>
                            <th>Visible</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>
                                    <a href="{{ route('product.edit',$product->slug) }}" class="btn btn-primary">
                                      <i class="fas fa-pencil-alt    "></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('product.destroy',$product->slug) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
        								<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
        								</button>
                                    </form>
        						</td>
                                <td><img src="{{ $product->image }}" width="40"></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->extract }}</td>
                                <td>${{ number_format($product->price,2) }}</td>
                                <td>{{ $product->visible == 1 ? "Si" : "No" }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <hr>
            {{ $products->links() }}
        </div>
    </div>
@stop

