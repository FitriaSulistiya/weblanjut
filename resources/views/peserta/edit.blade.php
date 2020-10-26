@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-judul">Edit Data peserta</h3>
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ url('/peserta/' . $peserta->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="PUT" class="form-control">
                            <div class="form-group">
                                <label for="">peserta</label>
                                <input type="text" name="peserta" class="form-control" value="{{ $peserta->peserta }}" placeholder="Masukkan peserta" autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="">Kapasitas</label>
                                <input type="number" name="kapasitas" class="form-control" value="{{ $peserta->kapasitas }}" placeholder="Kapasitas Kelas">
                            </div>
                            <div class="form-group">
                                <label for="">Terisi</label>
                                <input type="number" name="terisi" class="form-control" value="{{ $peserta->terisi }}" placeholder="Isi Kelas">
                            </div>
                            <div class="form-group">
                                <input type="reset">
                                <button class="btn btn-primary btn-md">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection