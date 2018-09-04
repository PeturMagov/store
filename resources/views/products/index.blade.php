@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header text-center">
			All Products
		</div>
		<div class="card-body">
			<table class="table table-hover">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Price</th>
					<th>Actions</th>
				</tr>
				@foreach($products as $product)
				<tr>	
					<td>{{ $product->id }}</td>
					<td>{{ $product->name }}</td>
					<td>{{ $product->price }}</td>
					<td>
						<a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-warning btn-sm">Edit</a>
						<a href="{{ route('products.delete', ['id' => $product->id]) }}" class="btn btn-danger btn-sm">Delete</a>
						<a href="{{ route('product.show', ['id' => $product->id]) }}" class="btn btn-info btn-sm">View</a>
					</td>
				</tr>
				@endforeach	
			</table>
			<div class="text-center">
				<a href="{{ route('products.new') }}" class="btn btn-success">Add New Product</a>
			</div>
		</div>			
	</div>
@endsection