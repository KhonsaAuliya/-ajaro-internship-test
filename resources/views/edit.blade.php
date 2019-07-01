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
			<div class="card-body">
				Update Data Barang
				<br>
				<br>

				{{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <br>

						@foreach($barang as $p)
						<form action="/barang/update" method="post">
							<div class="form-group">
							{{ csrf_field() }}
							<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
								<label for="kode">Kode</label>
                                <input class="form-control" type="text" name="kode" value="{{ $p->kode }}">
	                        </div>

	                        <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="nama" value="{{ $p->nama }}">
	                        </div>

	                        <div class="form-group">
	                            <label for="deskripsi">Deskripsi</label>
	                            <textarea class="form-control" name="deskripsi">{{ $p->deskripsi }}</textarea>
	                        </div>

	                        <div class="form-group">
	                            <label for="stok">Stok</label>
	                           	<input class="form-control" type="number" name="stok" value="{{ $p->stok }}">
	                        </div>

	                        <div class="form-group">
	                            <label for="harga">Harga</label>
	                           	<input class="form-control" type="number" name="harga" value="{{ $p->harga}}">
	                        </div>

	                        <div class="form-group">
	                            <label for="berat">Berat</label>
	                            <input class="form-control" type="number" name="berat" value="{{ $p->berat}}">
	                        </div>

	                        <div class="form-group">
	                            <input class="btn btn-primary" type="submit" value="Simpan">
	                        </div>
						</form>
						@endforeach
				</div>

		</div>
	</div>
</body>
</html>