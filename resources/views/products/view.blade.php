@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header text-center">
			Product: {{ $product->name }}
		</div>
		<div class="card-body">
			<table class="table table-hover">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Brand</th>
					<th>Price</th>
					<th>Actions</th>
				</tr>
				<tr>	
					<td>{{ $product->id }}</td>
					<td>{{ $product->name }}</td>
					<td>{{ $product->brand->name }}</td>
					<td>{{ $product->price }}</td>
					<td>
						<a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-warning btn-sm">Edit</a>
						<a href="{{ route('products.delete', ['id' => $product->id]) }}" class="btn btn-danger btn-sm">Delete</a>
					</td>
				</tr>
			</table>
		</div>			
	</div>
	<br><br>
	<div class="card">
		<div class="card-header text-center">
			Units
		</div>
		<div class="card-body">
			@include('errors.errors')
			{{ Form::model($units, ['route' => 'units']) }}
			{{ Form::token() }}
			{{ Form::label('add units to product: '.$product->name)}}
			{{ Form::hidden('product_id', $product->id) }}
			<br>
			{{ Form::label('number of units:')}}
			<div class="input-group">
			{{ Form::text('number', null, ['class' => 'form-control']) }}
			<br>
			{{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
			</div>
			{{ Form::close() }}
		</div>
	</div>
	<br><br>
	<div class="card">
		<div class="card-header text-center">
			Units of: {{ $product->name }}s
		</div>
		@include('units.form')			
	</div>
@endsection