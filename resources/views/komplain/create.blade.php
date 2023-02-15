@extends('layouts.app')
@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
@if ($errors->any())
    
@endif  

    <div class="card">
        <div class="card-body">
            <form action="{{ url('/komplains') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Komplain Masuk</label>
                    <input name="tgl_masuk" type="date" class="form-control">
                    @error('tgl_masuk')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                    <input name="jam_masuk" type="time" class="form-control">
                    @error('jam_masuk')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Unit</label>
                    <input name="unit" class="form-control" id="" rows="3">
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
                        <input class="btn btn-default" type="radio" name="jenis" value="Software" id="software">
						<label class="btn btn-default" for="software">Software</label>
                        </div>
                        <div class="form-check">
                        <input class="btn btn-default" type="radio" name="jenis"  value="Hardware" id="hardware">
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
                    <textarea name="isi" class="form-control" id="" rows="3"></textarea>
                    @error('isi')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection