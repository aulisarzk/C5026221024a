@extends('master2')
@section('judulhalaman', 'Data Sepatu')

@section('konten')

    <br/>
    <h3>Lihat Stock</h3>

    <a href="/sepatu"> Kembali</a>

    <br/>
    <br/>
    <br/>

    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-8">
            @foreach ($sepatu as $s)
                <fieldset disabled>
                    <form action="/sepatu/update" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="kodesepatu" class="col-sm-2 col-form-label">Kode Sepatu</label>
                            <div class="col-sm-10">

                                <input type="text" class="form-control" required="required" name="kodesepatu"
                                    value="{{ $s->kodesepatu }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="merksepatu" class="col-sm-2 col-form-label">Merk Sepatu</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="merksepatu" required="required"
                                    name="merksepatu" value="{{ $s->merksepatu }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stocksepatu" class="col-sm-2 col-form-label">Stock Sepatu</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="stocksepatu" required="required"
                                    name="ustocksepatu" value="{{ $s->stocksepatu }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="tersedia" required="required" name="tersedia">{{ $s->tersedia }}</textarea>
                            </div>
                        </div>
                        <input type="hidden" name="kodesepatu" value="{{ $s->kodesepatu }}"> <br />


                    </form>
                </fieldset>
                <a href="/sepatu"><input type="submit" value="Oke" class="btn btn-primary"></a>
        </div>

    </div>
    @endforeach

@endsection
