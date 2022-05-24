
@extends('layouts.main')

@section('container')
    
    <h1 class="text-center mb-3 mt-4" style="margin-top:">Update Profile</h1>
    <div class="card container col-lg-4">
        <div class="card-body row">
            <form action="/profile/{{ $user->id }}" method="post" class="col-md-12">
                @csrf
                @method('put')
                <div class="mb-2">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control shadow-sm @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" name="nama_lengkap" value="{{ $profile[0]->nama_lengkap }}">
                    @error('nama_lengkap')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row">
                    <div class="mb-2 col-md-6">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-select" id="kelas" name="kelas">
                            <option value="x">X</option>
                            <option value="xi">XI</option>
                            <option value="xii">XII</option>
                        </select>
                    </div>
                    <div class="mb-2 col-md-6">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select" id="jurusan" name="jurusan">
                            <option value="tr">TR</option>
                            <option value="tja">TJA</option>
                            <option value="tkj">TKJ</option>
                            <option value="rpl">RPL</option>
                        </select>
                    </div>
                </div>
                <div class="mb-2">
                    <label for="">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="l" checked>
                        <label class="form-check-label" for="laki-laki"> Laki-laki </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="p">
                        <label class="form-check-label" for="perempuan"> Perempuan </label>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <button type="submit" class="btn btn-dark">Register</button>
                </div>
            </form>
        </div>
        @if (session()->has('errorProfile'))
            <div class="alert alert-danger col-md-6 mx-auto mt-4" role="alert">
                {{ session('errorProfile') }}
            </div>
        @endif
        @if (session()->has('successProfile'))
            <div class="alert alert-success col-md-6 mx-auto mt-4" role="alert">
                {{ session('successProfile') }}
            </div>
        @endif
    </div>
    
@endsection

