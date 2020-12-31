<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan User Dengan DOMPDF Laravel</title>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan User</h4>
		</center>
		
		<table class='table table-bordered' border="1" >
			<thead>
				<tr>
					<th>No</th>
					<th>ID</th>
					<th>Nama</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($user as $u)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$u->id}}</td>
					<td>{{$u->name}}</td>
					<td>{{$u->email}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
</body>
</html>