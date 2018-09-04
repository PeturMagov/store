@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header text-center">
			Update the product
		</div>
		<div class="card-body">
			@include('products.errors')
			{{ Form::model($product, array('route' => array('products.update', ['id' => $product->id]))) }}
			@include('products.form', ['btnText' => 'Update Product'])
			{{ Form::close() }}
			
		</div>
	</div>
@endsection

