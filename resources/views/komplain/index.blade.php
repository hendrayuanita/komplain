@extends('layouts.app')

@section('main')
<div class="border rounded my-5 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 380px;">
        <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
            <span class="fs-5 fw-semibold">Komplain Lists : {{$data->total() }}</span>
            <a href="{{ url('/komplains/create') }}" class="btn btn-sm btn-primary">add</a>
        </div>
        @foreach($data as $item)
        <div class="list-group list-group-flush border-bottom scrollarea">
            <div class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">{{ $item->unit }}</strong>
                    <small>{{ $item->tgl_masuk }}</small>
                    
                    <!-- <small>Wed</small> -->
                </div>
                <div class="col-10 mb-1 small">{{ $item->jenis }}</div>
                <div class="group-action">
                    <form action="{{ url("komplains/$item->id") }}" method="POST">
                    @csrf @method('DELETE')
                   <a href="{{ url("komplains/valid/$item->id") }}" class="badge bg-info text-white">validasi</a>
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')" class="badge bg-danger text-white">delete</button>
                </form>
                </div>
            </div>
        </div>
        @endforeach
        <br>
        {{ $data->links('pagination::bootstrap-4') }}
</div>
@endsection