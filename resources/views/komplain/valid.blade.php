@extends('layouts.app')
@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
@if ($errors->any())
  
@endif  

    <div class="card">
        <div class="card-body">
            <form action="{{ url('/komplains/store_valid') }}" method="POST">
                @csrf
                 <input type="hidden" name="id_komp" value="{{ $komplain->id }}">
                <div class="mb-3">
                    <label for="" class="form-label">Komplain Ditangani</label>
                    <input name="tgl_ditangani" type="date" class="form-control" id="" rows="3">
                    @error('tgl_ditangani')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Respon Komplain</label>
                    <select name="respon" class="form-control" id="" rows="3">
                    <option>pilih..</option>
                    <option>Datang Langsung</option>
                    <option>Remote</option>
                    <option>Whatsapp</option>
                    <option>Telepon</option>
                    </select>
                    @error('respon')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Uraian Penyelesaian</label>
                    <textarea name="penyelesaian" class="form-control" id="" rows="3"></textarea>
                    @error('penyelesaian')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tingkat Kesulitan</label>
                    <!-- <textarea name="level" class="form-control" id="" rows="3"></textarea> -->
                    <div class="btn-group" >
						<div class="form-check">
                        <input class="btn btn-default" type="radio" name="level"  value="1" id="mudah">
						<label class="btn btn-default" for="mudah">Mudah</label>
                        </div>
                        <div class="form-check">
                        <input class="btn btn-default" type="radio" name="level" value="2" id="sedang">
						<label class="btn btn-default" for="sedang">Sedang</label>
                        </div>
                        <div class="form-check">
                        <input class="btn btn-default" type="radio" name="level"  value="3" id="sulit">
						<label class="btn btn-default" for="sulit">Sulit</label>
                        </div>
                    </div>
                    @error('level')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Komplain Selesai</label>
                    <input name="tgl_selesai" type="date" class="form-control" id="" rows="3">
                    @error('tgl_selesai')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Berhasil/Tidak</label>
                    <!-- <textarea name="capaian" class="form-control" id="" rows="3"></textarea> -->
                    <div class="btn-group" >
						<div class="form-check">
                        <input class="btn btn-default" type="radio" name="capaian"  value="berhasil" id="berhasil">
						<label class="btn btn-default" for="berhasil">Berhasil</label>
                        </div>
                        <div class="form-check">
                        <input class="btn btn-default" type="radio" name="capaian" value="tidak_berhasil" id="tidak">
						<label class="btn btn-default" for="tidak">Tidak Berhasil</label>
                        </div>
                    </div>
                    @error('capaian')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Petugas</label>
                    <input name="petugas" class="form-control" id="" rows="3">
                    @error('petugas')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                    <!-- <textarea name="petugas" class="form-control" id="" rows="3"></textarea> -->
                    <!-- <div class="btn-group" >
                        <input class="btn btn-default" type="checkbox" name="petugas"  value="rizky" id="rizky">
						<label class="btn btn-default" for="rizky">Rizky</label>
                       
                        <input class="btn btn-default" type="checkbox" name="petugas"  value="magrid" id="magrid">
						<label class="btn btn-default" for="magrid">Magrid</label>
    
                        <input class="btn btn-default" type="checkbox" name="petugas"  value="adit" id="adit">
						<label class="btn btn-default" for="adit">Adit</label>
                       
                        <input class="btn btn-default" type="checkbox" name="petugas"  value="yuan" id="yuan">
						<label class="btn btn-default" for="yuan">Yuan</label>
                        
                    </div>
                    @error('petugas')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div> -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection