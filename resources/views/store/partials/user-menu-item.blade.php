@if(!\Auth::user()) <!--Si no esta logeuado-->
    <li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user"></i> <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="{{ route('login') }}">Iniciar sesión</a></li>
		</ul>
	</li>
@else
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user"></i> {{ \Auth::user()->user }} <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="">Mis Pedidos</a></li>
			<li>
                <form action="{{ route('logout') }}" method="post" class="d-inline">
                    @csrf
                    <button type="submit" class="btn-link">&nbsp; &nbsp; Finalizar sesión</button>
                </form>
            </li>
		</ul>
	</li>
@endif

<style>

</style>