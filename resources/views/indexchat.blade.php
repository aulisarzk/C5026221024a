@extends('master2')
@section('judulhalaman', 'Chat')
@section('konten')

    <br />
    <h3>Pesan</h3>

    <a href="/chat/tambah" class="btn btn-primary"> + Tambah Pesan</a>
    <br />
    <br />

    <table class="table table-striped table-hover">
        <tr class="text-center">
            <th>ID</th>
            <th>Pesan</th>
        </tr>
        @foreach ($chat as $c)
            <tr class="text-center">
                <td>{{ $c->id }}</td>
                <td>{{ $c->pesan }}</td>
                <td>
                    @if ($c->pesan == ":))")
                        A
                    @elseif ($c->pesan == ":3")
                        B
                    @elseif ($c->pesan == ":P")
                        C
                    @else
                        D
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection
