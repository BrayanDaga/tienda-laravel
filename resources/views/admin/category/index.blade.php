@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-list"></i> Categorías
                <small>
                    <a class="btn btn-warning" href="/category/create">
                        <i class="fa fa-plus"></i> Agregar
                    </a>
                </small>
            </h1>
        </div>

        <div class="page">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Color</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('category.edit',$category) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('category.destroy',$category) }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button onclick="return confirm('Eliminar Registro?')" class="btn btn-danger"> <i class="fa fa-trash" ></i> </button>
                                    </form>
                                </td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td style="background:{{ $category->color }};">{{ $category->color }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <hr>
                {{ $categories->links() }}
            </div>
        </div>
    </div>

@endsection
