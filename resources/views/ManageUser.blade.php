@extends('Layouts.Master')
@section('title', 'USER')

@section('content')

<div class="container">
	<div class="row">
		<h1 class="my-4">PENGELOLAAN USER</h1>

		<a href="manageuser/cetak_pdf" class="btn btn-primary btn-lg btn-block" target="_blank">CETAK PDF USER</a>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				@foreach($user as $u)
				<tr>
					<td>{{$u->id}}</td>
					<td>{{$u->name}}</td>
					<td>{{$u->email}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection