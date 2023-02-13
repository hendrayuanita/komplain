@extends('layouts.app')
@section('main')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">Unit</th>
            <th scope="col">Jenis Komplain</th>
            <th scope="col">Isi Komplain</th>
            <th scope="col">Tanggal Ditangani</th>
            <th scope="col">Respon</th>
            <th scope="col">Solusi</th>
            <th scope="col">Tingkat Kesulitan</th>
            <th scope="col">Tanggal Selesai</th>
            <th scope="col">Berhasil/Tidak</th>
            <th scope="col">Petugas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($komplain as $item)
        <tr>
        <td>{{ $item->tgl_masuk }}</td>
            <td>{{ $item->unit }}</td>
            <td>{{ $item->jenis }}</td>
            <td>{{ $item->isi }}</td>
            <td>{{ $item->tgl_ditangani }}</td>
            <td>{{ $item->respon }}</td>
            <td>{{ $item->penyelesaian }}</td>
            <td>{{ $item->level }}</td>
            <td>{{ $item->tgl_selesai }}</td>
            <td>{{ $item->capaian }}</td>
            <td>{{ $item->petugas }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
