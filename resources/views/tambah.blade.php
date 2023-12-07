<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>

<body>

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}

        Nama <input type="text" name="nama"> <br/>
		Jabatan <input type="text" name="jabatan"> <br/>
		Umur <input type="number" name="umur"> <br/>
		Alamat <textarea name="alamat"></textarea> <br/>
		<input type="submit" value="Simpan Data">

        <div class="form-group row">
            <label for="first_name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="umur" name="umur">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" id="alamat" name="alamat"></textarea>
                </div>
        </div>




        <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
</div>
</div>
@endsection


</body>

</html>
