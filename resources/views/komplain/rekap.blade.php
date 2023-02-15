@extends('layouts.app')
@section('main')

<div class="card-box table-responsive">
<table id="table-komplain" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">Jam Masuk</th>
            <th scope="col">Unit</th>
            <th scope="col">Jenis Komplain</th>
            <th scope="col">Isi Komplain</th>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">Jam Ditangani</th>
            <th scope="col">Respon</th>
            <th scope="col">Penyelesaian</th>
            <th scope="col">Tingkat Kesulitan</th>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">Jam Selesai</th>
            <th scope="col">Berhasil/Tidak</th>
            <th scope="col">Petugas</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1 @endphp
        @foreach ($komplain as $item)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $item->tgl_masuk }}</td>
            <td>{{ $item->jam_masuk }}</td>
            <td>{{ $item->unit }}</td>
            <td>{{ $item->jenis }}</td>
            <td>{{ $item->isi }}</td>
            <td>{{ $item->tgl_masuk }}</td>
            <td>{{ $item->jam_ditangani }}</td>
            <td>{{ $item->respon }}</td>
            <td>{{ $item->penyelesaian }}</td>
            <td>{{ $item->level }}</td>
            <td>{{ $item->tgl_masuk }}</td>
            <td>{{ $item->jam_selesai }}</td>
            <td>{{ $item->capaian }}</td>
            <td>{{ $item->petugas }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script>
$(document).ready(function() {
    $('#table-komplain').DataTable();
});
</script>

@endsection
