@extends('master2')
@section('judulhalaman','Chat')

@section('konten')

	<h3>Tambah Pesan</h3>

	<a href="/chat">Kembali</a>

	<br/>
	<br/>

    <form action="/chat/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="pesan" class="col-1 col-form-label">Pesan</label>
            <div class="col-5">
                <input type="text" class="form-control" id="pesan" name="pesan">
            </div>
        </div>
		<input type="submit" value="Ubah" class="btn btn-primary">
	</form>

@endsection
