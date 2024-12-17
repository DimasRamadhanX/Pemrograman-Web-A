@extends('layout2')
@section('content')
<div>

<a href="/nilaikuliah" class="btn btn-secondary"> Kembali</a>

<br/>


<form action="/nilaikuliah/store" method="post">
    {{ csrf_field() }}

    <div class="mb-3">
        <label for="NRP" class="form-label">NRP</label>
        <input type="text" class="form-control" required="required" name="NRP">
    </div>

    <div class="mb-3">
        <label for="NilaiAngka" class="form-label">NilaiAngka</label>
        <input type="number" class="form-control" required="required" name="NilaiAngka">
    </div>
    <div class="mb-3">
        <label for="SKS" class="form-label">SKS</label>
        <input type="number" class="form-control" required="required" name="SKS">
    </div>
    <input type="submit" class="btn btn-primary" value="Simpan Data">
</form>


</div>
@endsection
