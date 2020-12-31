@extends('Layouts.Master')
@section('title', 'Manage')
@section('content')
<br>

<div class="container">
	<div class="row">
		<h1 class="my-4">PENGELOLAAN ARTIKEL</h1>
		<a href="manage/add" class="btn btn-secondary btn-lg btn-block">Tambah Data</a>		
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Tanggal</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($article as $a)
				<tr>
					<td>{{$a->id}}</td>
					<td>{{$a->title}}</td>
					<td>{{$a->created_at}}</td>
					<td>
						<a href="manage/edit/{{ $a->id }}" class="badge badge-warning">Edit</a>
						<a href="manage/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</div>
@endsection