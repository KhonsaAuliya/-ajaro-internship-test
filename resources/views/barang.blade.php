<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<title>Barang</title>
</head>
<body>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header text-center">
				Kelola Data Barang 
			</div>
			<div class="card-body">Data Barang
				<br>
				<a href="/barang/tambah" class="btn btn-success text">Tambah</a>
				<br>
				<br>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Kode</th>
							<th>Nama</th>
							<th>Deskripsi</th>
							<th>Stok</th>
							<th>Harga</th>
							<th>Berat</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($barang as $p)
						<tr>
							<td>{{ $p->kode }}</td>
							<td>{{ $p->nama }}</td>
							<td>{{ $p->deskripsi }}</td>
							<td>{{ $p->stok }}</td>
							<td>{{ $p->harga }}</td>
							<td>{{ $p->berat }}</td>
							<td>
								<a href="/barang/edit/{{ $p->id }}"> <font color="blue">Edit</font></a>
								<a href="/barang/hapus/{{ $p->id }}"> <font color="red">Hapus</font></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>