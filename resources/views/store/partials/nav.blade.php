<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand main-title" href="/">
				<i class="fa fa-terminal"></i> Brayan
			</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<p class="navbar-text">Online store demo</p>
			<ul class="nav navbar-nav navbar-right">
				<li class="active">
					<a href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i></a>
				</li>
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Categorías <span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/">Todas</a></li>
						<li><a href="#">Hombre</a></li>
						<li><a href="#">Mujer</a></li>
					</ul>
				</li>-->
				<li><a href="#">Conocenos<span class="sr-only">(current)</span></a></li>
        		<li><a href="#">Contacto</a></li>
        @include('store.partials.user-menu-item')
			</ul>
		</div>
	</div>
</nav>