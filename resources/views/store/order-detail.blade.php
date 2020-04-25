@extends('store.template')

@section('title'){{ 'Carrito de compras | Detalle del Pedido' }}@endsection

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-shopping-cart"></i> Detalle del Pedido</h1>
		</div>
		<div class="table-cart">
		<div class="page">
			<div class="table-responsive" >
	
				<?php $user =\Auth::user() ?>
				<h3>Datos del Usuario:</h3>
				<table class="table table-bordered  table-striped table-hover">
					<tbody>
						<tr>
							<td>Usuario:</td>
							<td>{{ $user['name'] . " " . $user['last_name'] . "(" . $user['user'] .")" }}</td>
						</tr>
						<tr>
							<td>Correo:</td>
							<td>{{ $user['email'] }}</td>
						</tr>
						<tr>
							<td>Dirección:</td>
							<td>{{ $user['address'] }}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="table-responsive" >
				<h3>Datos del Pedido:</h3>
		
				@if(count($cart))
		
					<table class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th class="text-center">Producto</th>
								<th class="text-center">Precio</th>
								<th class="text-center">Cantidad</th>
								<th class="text-center">Subtotal</th>
							</tr>	
						</thead>
						<tbody>
							@foreach($cart as $producto)
								<tr>
									<td>{{ $producto->name }}</td>
									<td>${{ number_format($producto->price, 2) }}</td>
									<td>{{ $producto->quantity }}</td>
									<td>${{ number_format($producto->price * $producto->quantity, 2) }}</td>
								</tr>
							@endforeach	
						</tbody>
					</table>
			
					<hr>
					<h3>
						<span class="label label-success">
							Total: ${{ number_format($total, 2) }}
						</span>
					</h3>
					<p><b>Importante: </b> Costo del envio: $100.00 (se agrega al total de su compra)</p><hr>
		
					<a class="btn btn-primary" href="{{ \URL::previous() }}">
						<i class="fa fa-chevron-circle-left"></i> Regresar
					</a>
					
					<button class="btn btn-warning">
						Pagar con <i class="fa fa-cc-paypal fa-2x"></i>
					</button>
		
				@else
					<p>No hay productos en el carrito :(</p>
				@endif
			</div>
			</div>
		</div>
	</div>
	</div>
@endsection
