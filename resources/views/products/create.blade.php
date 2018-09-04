@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header text-center">
			Add a new product
		</div>
		<div class="card-body">
			@include('products.errors')
			{{ Form::model($product, array('route' => array('products'))) }}
			@include('products.form', ['btnText' => 'Create Product'])
			{{ Form::close() }}
		</div>
	</div>
@endsection