@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-judul">Tambah Data peserta</h3>
                    </div>
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ url('/peserta') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="">asal sekolah</label>
                                <input type="text" name="asalsekolah" class="form-control" placeholder="Masukkan kelas">
                            </div>
                            <div class="form-group">
                                <label for="">gender</label>
                                <input type="text" name="gender" class="form-control" placeholder="Masukkan gender">
                            </div>
                            <div class="form-group">
                                <input type="reset">
                                <button class="btn btn-primary btn-md">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection