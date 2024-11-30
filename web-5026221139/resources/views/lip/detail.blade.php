@extends('layout2')
@section('content')
<div>

<h3>Detail</h3>
<div class=" my-4 p-5 container-fluid rounded-4" style="background-color: rgb(221, 247, 247)">
    <a href="/lipstick" class="btn btn-secondary"> Kembali</a>

    </br>

    @foreach($lipstick as $l)
    {{-- <div class="row my-2">
        <div for="merklipstick" class="col">Kode/ID Lipstick :</div>
        <div class="col fw-bold">{{ $l->kodelipstick }}</div>
    </div> --}}

    <div class="row my-2">
        <div for="merklipstick" class="col">Merk Lipstick :</div>
        <div class="col fw-bold">{{ $l->merklipstick }}</div>
    </div>

    <div class="row my-2">
        <div for="stocklipstick" class="col">Jumlah Stok :</div>
        <div class="col fw-bold">{{ $l->stocklipstick }}</div>
    </div>

    <div class="mb-3 my-2">
        <label for="tersedia" class="form-label">Status Tersedia (bisa diganti)</label><br>
        <input type="radio" id="tersedia_y" name="tersedia" value="Y" {{ $l->tersedia == 'Y' ? 'checked' : '' }} > Tersedia
        <input type="radio" id="tersedia_n" name="tersedia" value="N" {{ $l->tersedia == 'N' ? 'checked' : '' }} > Tidak Tersedia
    </div>
    @endforeach
</div>


</div>
@endsection
