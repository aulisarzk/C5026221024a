@extends('master2')
@section('judulhalaman', 'Data Nilai Kuliah')
@section('konten')

    <br />
    <h3>Data Nilai Kuliah</h3>

    <a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Data</a>
    <br />
    <br />

    <table class="table table-striped table-hover">
        <tr class="text-center">
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $n)
            <tr class="text-center">
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP}}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>
                    @if ($n->NilaiAngka >= 81)
                        A
                    @elseif ($n->NilaiAngka >= 61)
                        B
                    @elseif ($n->NilaiAngka >= 41)
                        C
                    @else
                        D
                    @endif
                </td>
                <td >{{ ($n->NilaiAngka * $n->SKS ) }}</td>
            </tr>
        @endforeach
    </table>
@endsection
