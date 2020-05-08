@extends('admin.template')

@section('content')

    <div class="container text-center">

        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i> PRODUCTOS <small>[ Editar producto ]</small>
            </h1>
        </div>

        <div class="row">
            <div class="col-md-offset-3 col-md-6">

                <div class="page">

                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif

                    <form action="{{ route('product.update',$product->slug) }}" method="post">
                        @method('put')
                        @csrf

                        <div class="form-group">
                            <label class="control-label" for="category_id">Categoría</label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach ($categories as $category)

                                    <option value="{{ $category->id }}"
                                        @if ($product->category_id == $category->id)
                                        selected="true">
                                        @endif
                                        {{ $category->name }}
                                    </option>

                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Ingresa el nombre..." autofocus value="{{ $product->name }}">

                        </div>

                        <div class="form-group">
                            <label for="extract">Extracto:</label>
                                <input type="text" name="extract" id="extract" class="form-control"  placeholder ='Ingresa el extracto...' value="{{ $product->extract }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción:</label>
                            <textarea name="description" class="form-control" id="description" >{{ $product->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Precio:</label>
                            <input type="text" name="price" id="price" class="form-control"  placeholder ='Ingresa el precio...' value="{{ $product->price }}">

                        </div>

                        <div class="form-group">
                            <label for="image">Imagen:</label>
                            <input type="text" name="image" id="image" class="form-control"  placeholder ='Ingresa la url de la imagen...' value="{{ $product->image }}">

                        </div>

                        <div class="form-group">
                            <label for="visible" class="form-check-label">Visible:</label>
                            <input type="checkbox" name="visible" id="visible" class="form-check-input"
                            {{ $product->visible > 0  ? "checked": ""}}  >
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Actulizar</button>
                            <a href="/Aproduct" class="btn btn-warning">Cancelar</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>

@stop
