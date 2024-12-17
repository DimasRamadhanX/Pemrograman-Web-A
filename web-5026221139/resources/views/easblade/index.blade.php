@extends('layout2') {{--pake style 2--}}



@section('content')
<div>
    <h3>Data nilai kuliah</h3>

    <!-- Link untuk tambah nilaikuliah baru -->
    <a href="/nilaikuliah/tambah" class="btn btn-primary mb-3">+ Tambah Data</a>

    <!-- Tabel data nilaikuliah -->
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilaikuliah as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>

                <td>{{ $n->NilaiHuruf }}</td>
                <td>{{ $n->Bobot }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{-- {{ $nilaikuliah->links('pagination::bootstrap-5') }} biar bootstrap 5 support--}}
        {{ $nilaikuliah->links() }} {{--ini default--}}
    </div>
</div>
@endsection
