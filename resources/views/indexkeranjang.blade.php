@extends('master2')
@section('judulhalaman', 'Data Keranjang Belanja')

@section('konten')
    <br />
    <h3>Keranjang Belanja</h3>

    <a href="/keranjangbelanja/beli" class="btn btn-primary mb-3"> BELI </a>
    <br />
    <br />
    
    <table class="table table-striped table-hover">
        <tr class="text-center">
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga Per Item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($keranjangbelanja as $k)
            <tr class="text-center">
                <td>{{ $k->ID }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->Jumlah }}</td>
                <td>{{ number_format($k->Harga, 2, ',', '.') }}</td>
                <td>{{ number_format($k->Harga * $k->Jumlah, 2, ',', '.') }}</td>
                <td>
                    <a href="/keranjangbelanja/hapus/{{ $k->ID }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
