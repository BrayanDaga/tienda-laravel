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
			<p class="navbar-text"><i class="fa fa-dashboard"></i> Dashboard</p>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="">
						<i class="fa fa-check-circle"></i> Categorías
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa fa-check-circle"></i> Productos
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa fa-check-circle"></i> Pedidos
					</a>
				</li>

				@include('admin.partials.admin-menu')
			</ul>
		</div>
	</div>
</nav>
