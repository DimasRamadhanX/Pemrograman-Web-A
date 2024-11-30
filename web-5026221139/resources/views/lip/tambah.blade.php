@extends('layout2')
@section('content')
<div>

<a href="/lipstick" class="btn btn-secondary"> Kembali</a>

<br/>


<form action="/lipstick/store" method="post">
    {{ csrf_field() }}

    <div class="mb-3">
        <label for="merklipstick" class="form-label">Merk Lipstick</label>
        <input type="text" class="form-control" required="required" name="merklipstick">
    </div>

    <div class="mb-3">
        <label for="stocklipstick" class="form-label">Jumlah Stok</label>
        <input type="number" class="form-control" required="required" name="stocklipstick">
    </div>
    <div class="mb-3">
        <label for="tersedia" class="form-label">Status Tersedia (isi dulu aja deh)</label><br>
        <input type="radio" id="tersedia_y" name="tersedia" value="Y"> Tersedia
        <input type="radio" id="tersedia_n" name="tersedia" value="N"> Tidak Tersedia
    </div>

    <input type="submit" class="btn btn-primary" value="Simpan Data">
</form>


</div>
@endsection
