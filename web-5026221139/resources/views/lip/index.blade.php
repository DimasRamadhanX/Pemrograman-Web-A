@extends('layout2') {{--pake style 2--}}



@section('content')
<div>
    <h3>Toko Lipstick Enterprise</h3>

    <!-- Link untuk tambah lipstick baru -->
    <a href="/lipstick/tambah" class="btn btn-primary mb-3">+ Lipstick</a>

    <!-- Form pencarian -->
    <p>Cari Produk atau Merk Lipstick :</p>
    <form action="/lipstick/cari" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="cari" class="form-control" placeholder="Cari lipstick .." value="{{ old('cari') }}">
            <button class="btn btn-success" type="submit">Cari</button>
        </div>
    </form>

    <!-- Tabel data lipstick -->

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-light">
            <tr>
                <th>Merk Lipstick</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lipstick as $l)
            <tr>
                <td>{{ $l->merklipstick }}</td>
                <td class="text-center">
                    <a href="/lipstick/detail/{{ $l->kodelipstick }}" class="btn btn-primary btn-sm text-light">
                        Detail
                    </a>
                    <a href="/lipstick/edit/{{  $l->kodelipstick }}" class="btn btn-info btn-sm text-light">
                        Edit
                    </a>
                    <a href="/lipstick/hapus/{{  $l->kodelipstick }}" class="btn btn-danger btn-sm text-light">
                        Hapus
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Info pagination -->
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <span>Halaman : {{ $lipstick->currentPage() }}</span> <br/>
            <span>Jumlah Data : {{ $lipstick->total() }}</span> <br/>
            <span>Data Per Halaman : {{ $lipstick->perPage() }}</span>
        </div>
    </div>
    <div>
        {{-- {{ $lipstick->links('pagination::bootstrap-5') }} biar bootstrap 5 support--}}
        {{ $lipstick->links() }} {{--ini default--}}
    </div>
</div>
@endsection
