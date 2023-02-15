@extends('layouts.app')

@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
@if ($errors->any())
    <!-- <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> -->
@endif  
    <div class="card">
        <div class="card-body">
            <form action="{{ url("/komplains/$komplain->id") }}" method="POST">
                @csrf @method('PATCH')
                <div class="mb-3">
                    <label for="" class="form-label">Komplain Masuk</label>
                    <input name="tgl_masuk" type="date" class="form-control" value="{{ old('tgl_masuk', $komplain->tgl_masuk) }}">
                    <input name="tgl_masuk" type="time" class="form-control" value="{{ old('jam_masuk', $komplain->jam_masuk) }}">
                    @error('tgl_masuk')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Unit</label>
                    <input name="unit" class="form-control" id="" rows="3" value="{{ old('unit', $komplain->unit) }}">
                    @error('unit')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Jenis Komplain</label>
                    <!-- <textarea name="jenis" class="form-control" id="" rows="3"></textarea> -->
                    <div class="btn-group" >
						<div class="form-check">
                        <input class="btn btn-default" type="radio" name="jenis" required="required" value="Software" id="software"
                        {{ ($komplain->jenis=="Software")? "checked" : "" }}>
						<label class="btn btn-default" for="software">Software</label>
                        </div>
                        <div class="form-check">
                        <input class="btn btn-default" type="radio" name="jenis" required="required" value="Hardware" id="hardware"
                        {{ ($komplain->jenis=="Hardware")? "checked" : "" }}>
						<label class="btn btn-default" for="hardware">Hardware</label>
                        </div>
                    </div>
                    @error('jenis')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Isi Komplain</label>
                    <textarea name="isi" class="form-control" id="" rows="3">{{old('isi', $komplain->isi) }}</textarea>
                    @error('isi')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection