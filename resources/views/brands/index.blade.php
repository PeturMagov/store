@extends('layouts.app')

@section('content')

<br>
	<div class="card">
		<div class="card-header text-center">
			All Brands
		</div>	
		<div class="card-body">
			<table class="table table-hover">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Actions</th>
				</tr>
				@foreach($brands as $brand)
				<tr>	
					<td>{{ $brand->id }}</td>
					<td>{{ $brand->name }}</td>
					<td>
						<a href="{{ route('brands.edit', ['id' => $brand->id]) }}" class="btn btn-warning btn-sm">Edit</a>
						<a href="{{ route('brands.delete', ['id' => $brand->id]) }}" class="btn btn-danger btn-sm">Delete</a>
						<a href="{{ route('brand.show', ['id' => $brand->id]) }}" class="btn btn-info btn-sm">View</a>
					</td>
				</tr>
				@endforeach
			</table>

			<div class="text-center">
				<a href="{{ route('brands.new') }}" class="btn btn-success">Add New Brand</a>
			</div>
		</div>			
	</div>
@endsection