{{-- <!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

    <p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    Halaman : {{ $pegawai->currentPage() }} <br/>
	Jumlah Data : {{ $pegawai->total() }} <br/>
	Data Per Halaman : {{ $pegawai->perPage() }} <br/>


	{{ $pegawai->links() }}


</body>
</html> --}}

@extends('layout2') {{--pake style 2--}}



@section('content')
<div>
    <h3>Data Pegawai</h3>

    <!-- Link untuk tambah pegawai baru -->
    <a href="/pegawai/tambah" class="btn btn-primary mb-3">+ Tambah Pegawai Baru</a>

    <!-- Form pencarian -->
    <p>Cari Data Pegawai :</p>
    <form action="/pegawai/cari" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="cari" class="form-control" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
            <button class="btn btn-success" type="submit">CARI</button>
        </div>
    </form>

    <!-- Tabel data pegawai -->
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-light">
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-info btn-sm text-light"><i class="fas fa-edit"></i><!--Edit--></a>

                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                        <i class="fa-solid fa-trash"></i><!--Hapus--></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Info pagination -->
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <span>Halaman : {{ $pegawai->currentPage() }}</span> <br/>
            <span>Jumlah Data : {{ $pegawai->total() }}</span> <br/>
            <span>Data Per Halaman : {{ $pegawai->perPage() }}</span>
        </div>
    </div>
    <div>
        {{-- {{ $pegawai->links('pagination::bootstrap-5') }} biar bootstrap 5 support--}}
        {{ $pegawai->links() }} {{--ini default--}}
    </div>
</div>
@endsection
