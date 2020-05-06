@extends('admin.template')

@section('content')

    <div class="container text-center">

        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i> PRODUCTOS <small>[ Agregar producto ]</small>
            </h1>
        </div>

        <div class="row">
            <div class="col-md-offset-3 col-md-6">

                <div class="page">

                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif

                    <form action="{{ route('Aproduct.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="category_id">Categoría</label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Ingresa el nombre..." autofocus>

                        </div>

                        <div class="form-group">
                            <label for="extract">Extracto:</label>
                                <input type="text" name="extract" id="extract" class="form-control"  placeholder ='Ingresa el extracto...'>
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción:</label>
                            <textarea name="description" class="form-control" id="description" ></textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Precio:</label>
                            <input type="text" name="price" id="price" class="form-control"  placeholder ='Ingresa el precio...'>

                        </div>

                        <div class="form-group">
                            <label for="image">Imagen:</label>
                            <input type="text" name="image" id="image" class="form-control"  placeholder ='Ingresa la url de la imagen...'>

                        </div>

                        <div class="form-group">
                            <label for="visible" class="form-check-label">Visible:</label>
                            <input type="checkbox" name="visible" id="visible" class="form-check-input">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="/Aproduct" class="btn btn-warning">Cancelar</a>
                        </div>

                    </form>
                </div>

            </div>
        </div>

    </div>

@stop
