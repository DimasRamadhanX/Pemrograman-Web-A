{{-- <!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>




	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required">
		Jabatan <input type="text" name="jabatan" required="required">
		Umur <input type="number" name="umur" required="required">
		Alamat <textarea name="alamat" required="required"></textarea>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html> --}}


@extends('layout2') {{--pake style 2--}}



@section('content')
    <div>
        {{-- <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2> --}}
        <h3>Data Pegawai</h3>

        <div class="col-12">
            <a class="btn btn-secondary"  href="/pegawai"> Kembali <a>
        </div>
        <form class="row g-3" action="/pegawai/store" method="post">
            {{ csrf_field() }}
            <div class="col-12">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" required="required">
            </div>
            <div class="col-12">
                <label class="form-label">Jabatan</label>
                <input type="text" class="form-control" name="jabatan" required="required">
            </div>
            <div class="col-12">
                <label class="form-label">Umur</label>
                <input type="number" class="form-control" name="umur" required="required">
            </div>
            <div class="col-12">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" required="required"></textarea>
            </div>
            <div class="col-12 mr-auto p-2">
                <button type="submit" class="btn btn-primary ">Simpan Data</button>
                {{-- <input type="submit" value="Simpan Data"> --}}
            </div>
        </form>
    </div>
@endsection
