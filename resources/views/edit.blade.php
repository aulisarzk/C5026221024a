
<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>

<body>

@extends('master2')
@section('judulhalaman', 'Data Pegawai')
@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
        <form action="/pegawai/update" method="post" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group row">
                <label class="control-label col-sm-2" for="name">Nama:</label>
                <div class="col-sm-10">
                    <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br />
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="jabatan">Jabatan:</label>
                <div class="col-sm-10">
                    <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
                    <br />
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="umur">Umur:</label>
                <div class="col-sm-10">
                    <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br />
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="alamat">Alamat:</label>
                <div class="col-sm-10">
                    <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
        </form>
    @endforeach

</body>

</html>
@endsection
