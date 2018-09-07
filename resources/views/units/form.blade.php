<div class="card-body">
	<table class="table table-hover">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Nubmer</th>
		</tr>
		@foreach($units as $unit)
		<tr>	
			<td>{{ $unit->id }}</td>
			<td>{{ $unit->product->name }}</td>
			<td>{{ $unit->number }}</td>
		</tr>
		@endforeach
	</table>
</div>