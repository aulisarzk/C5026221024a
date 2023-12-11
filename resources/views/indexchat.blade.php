@extends('master2')
@section('judulhalaman','Chat')
@section('konten')

	<h3>Pesan</h3>

    <style>
        .emot {

        max-width: 20px;
        max-height: 20px;
        }
    </style>

    @foreach ($chat as $c)
    <div>
        @php
            $teksconvert = [
                ':))' => '1.png',
                ':3'  => '2.png',
                ':P'  => '3.png',
                ':C'  => '4.png',
                ';)'  => '5.png',
            ];
            // memecah pesan menjadi array kata-kata
            $teks = explode(' ', $c->pesan);
            // menggantikan kata-kata tertentu dengan gambar
            $teks = array_map(function($kata) use ($teksconvert) {
                return isset($teksconvert[$kata]) ? '<img src="' . asset('/Pictures/' . $teksconvert[$kata]) . '" alt="' . $kata . '" class="emot" />' : $kata;
            }, $teks);
            $c->pesan = implode(' ', $teks);
        @endphp

        {!! $c->pesan !!}
    </div>
@endforeach
</div>
<br>
<br>
<br>
@endsection
