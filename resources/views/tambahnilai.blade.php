@extends('master2')
@section('judulhalaman','Data Nilai Kuliah')

@section('konten')

	<h3>Tambah Data</h3>

	<a href="/nilaikuliah">Kembali</a>

	<br/>
	<br/>

    <form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="nrp" class="col-1 col-form-label">NRP</label>
            <div class="col-5">
                <input type="number" class="form-control" id="nrp" name="nrp">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilaiangka" class="col-1 col-form-label">Nilai Angka</label>
            <div class="col-5">
                <input type="number" class="form-control" id="nilaiangka" name="nilaiangka">
            </div>
        </div>
        <div class="form-group row">
            <label for="sks" class="col-1 col-form-label">SKS</label>
            <div class="col-5">
                <input type="number" class="form-control" id="sks" name="sks">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection
