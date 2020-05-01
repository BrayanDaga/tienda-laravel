@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-list"></i> Categorías: <small>Agregar categoría</small></h1>
        </div>

    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <div class="page">
                @if (count($errors) > 0)
                    @include('admin.partials.errors')

                @endif

                <form action="{{ route('category.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" name="name" id="name" autofocus="autofocus" placeholder="Ingresa el nombre..."  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripcion</label>
                        <textarea id="description" rows="5" class="form-control" type="text" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="color">Color</label>
                        <input id="color" class="form-control" type="color" name="color">
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a class="btn btn-warning" href="/category">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>

@endsection
