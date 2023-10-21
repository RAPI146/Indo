@extends('layouts.template')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Data P4M</h4>
        </div>
        <form action="{{ route('quaryd.update', $data->id) }}" method="post">
            @csrf
            @method('PUT')
        <div class="form-group col-md-2">
            <label for="Tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $data->tanggal }}">
        </div>

        <div class="card-body">
            <div class="form-row">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="telur">Telur</label>
                        <input type="number" class="form-control" id="telur" name="telur"  value="{{ $data->telur }}" placeholder="Contoh : 10">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="panen">Panen</label>
                        <input type="number" class="form-control" id="panen" name="panen" value="{{ $data->panen }}" placeholder="Contoh : 10">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="omset">Omset</label>
                    <input type="text" class="form-control" id="omset" name="omset" value="{{ $data->omset }}" placeholder="Contoh : Rp 10.000" value="{{ old('omset') }}">
                </div>
                
                
                <div class="form-group col-md-4">
                    <label for="pengeluaran">Pengeluaran</label>
                    <input type="number" class="form-control" id="pengeluaran" name="pengeluaran" value="{{ $data->pengeluaran }}" placeholder="Contoh : Rp 10.000">
                </div>

                <div class="form-group col-md-4">
                    <label for="keuntungan">Keuntungan</label>
                    <input type="number" class="form-control" id="keuntungan" name="keuntungan" value="{{ $data->keuntungan }}"placeholder="Terisi Otomatis" >
                </div>


            </div>
            <div class="form-group mb-1">
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>


    

@endsection
