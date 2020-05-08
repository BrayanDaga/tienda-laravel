@extends('admin.template')

@section('content')

    <div class="container text-center">

        <div class="page-header">
            <h1>
                <i class="fa fa-user"></i> USUARIOS <small>[ Editar usuario ]</small>
            </h1>
        </div>

        <div class="row">
            <div class="col-md-offset-3 col-md-6">

                <div class="page">

                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif

                    <form action="{{ route('user.update',$user) }}" method="post">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input class="form-control" type="text" name="name" autofocus placeholder = 'Ingresa el nombre...'
                            value="{{ $user->name }}">
                        </div>

                        <div class="form-group">
                            <label for="last_name">Apellidos:</label>
                            <input class="form-control" type="text" name="last_name"  placeholder = 'Ingresa los apellidos ...'
                            value="{{ $user->last_name }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Correo:</label>
                            <input class="form-control" type="text" name="email"  placeholder = 'Ingresa el correo...'
                            value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label for="user">Usuario:</label>
                            <input class="form-control" type="text" name="user"  placeholder = 'Ingresa el nombre de usuario...'
                             value="{{ $user->user }}">
                        </div>

                        <div class="form-group">
                            <label for="type">Tipo:</label>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="type" class="custom-control-input" value="user"
                                {{ $user->type=='user' ? "checked":""}}>
                                User
                                <input type="radio" id="customRadioInline2" name="type" class="custom-control-input" value="admin"
                                {{ $user->type=='admin' ? "checked":""}}>
                                Admin
                              </div>

                        </div>

                        <div class="form-group">
                            <label for="address">Dirección:</label>

                            <textarea name="address" id="address" class="form-control">{{ $user->address }}</textarea>

                        </div>

                        <div class="form-group">
                            <label for="active">Active:</label>
                            <input type="checkbox" name="active" id="active" class="form-check-input"
                            {{ $user->active > 0  ? "checked": ""}}  >
                        </div>
                        <hr>

                        <fieldset>
                            <legend>Cambiar password:</legend>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input class="form-control" type="password" name="password" >
                            </div>

                            <div class="form-group">
                                <label for="confirm_password">Confirmar Password:</label>
                                <input class="form-control" type="password" name="password_confirmation">
                            </div>
                        </fieldset><hr>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Actualizar</button>

                            <a href="/user" class="btn btn-warning">Cancelar</a>
                        </div>

                    </form>
                </div>

            </div>
        </div>

    </div>

@stop
