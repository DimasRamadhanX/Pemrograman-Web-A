@extends('layout2')
@section('content')
<div>

<h3>Lipstick Auditing</h3>
<a href="/lipstick" class="btn btn-secondary"> Kembali</a>

<br/>

@foreach($lipstick as $l)
<form action="/lipstick/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="kodelipstick" value="{{ $l->kodelipstick }}">

    <div class="mb-3">
        <label for="merklipstick" class="form-label">Merk Lipstick</label>
        <input type="text" class="form-control" required="required" name="merklipstick" value="{{ $l->merklipstick }}">
    </div>

    <div class="mb-3">
        <label for="stocklipstick" class="form-label">Jumlah Stok</label>
        <input type="number" class="form-control" required="required" name="stocklipstick" value="{{ $l->stocklipstick }}">
    </div>

    <div class="mb-3">
        <label for="tersedia" class="form-label">Status Tersedia (bisa diganti)</label><br>
        <input type="radio" id="tersedia_y" name="tersedia" value="Y" {{ $l->tersedia == 'Y' ? 'checked' : '' }}> Tersedia
        <input type="radio" id="tersedia_n" name="tersedia" value="N" {{ $l->tersedia == 'N' ? 'checked' : '' }}> Tidak Tersedia
    </div>

    <input type="submit" class="btn btn-primary" value="Simpan Data">
</form>
@endforeach

</div>
@endsection
