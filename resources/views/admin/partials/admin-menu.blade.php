@if(!\Auth::user())
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user"></i> <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="{{ \URL::to('auth/login') }}">Iniciar sesión</a></li>
			<li><a href="{{ \URL::to('auth/register') }}">Registrarse</a></li>
		</ul>
	</li>
@else
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user"></i> {{ "Admin: " . \Auth::user()->user }} <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="{{ \URL::to('logout') }}">Finalizar sesión</a></li>
		</ul>
	</li>
@endif
