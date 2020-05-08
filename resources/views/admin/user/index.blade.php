@extends('admin.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i> USUARIOS
                <a href="user/create" class="btn btn-warning">
                    <i class="fa fa-plus-circle"></i> Usuario
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
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Tipo</th>
                            <th>Activo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>
                                    <a href="{{ route('user.edit',$user) }}" class="btn btn-primary">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('user.destroy',$user) }}" method="post">
                                        @method('delete')
                                        @csrf
        								<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                                            <i class="fas fa-trash-alt    "></i>
                                        </button>
                                    </form>

                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->user }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->type }}</td>
                                <td>{{ $user->active == 1 ? "Si" : "No" }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <hr>
            {{ $users->links() }}
        </div>
    </div>
@stop
