@extends('layouts.template')
@section('content')
<section class="section">
  
    <div class="section-header">
        <h1>Nambo</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <p align="right"><a class="btn btn-primary" href="{{ route('nambo.create') }}"><i class="fas fa-plus"></i> Tambah Data Nambo </a></p>

                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Telur</th>
                                        <th>Panen</th>
                                        <th>Omset</th>
                                        <th>Pengeluaran</th>
                                        <th>Keuntungan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $index => $x )
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ \Carbon\Carbon::parse($x->tanggal)->format('d F Y') }}</td>
                                        <td>{{ $x->telur }}</td>
                                        <td>{{ $x->panen }}</td>
                                        <td> {{ $x->omset }}</td>
                                        <td>{{ $x->pengeluaran }}</td>
                                        <td>{{ $x->keuntungan }}</td>
                                        <td>
                                            <a href="{{ route('nambo.edit', $x->id) }}" class="btn btn-warning btn-sm btn-edit">
                                                <i class="fa fa-wrench" aria-hidden="true"></i>
                                            </a>
                                            <form action="{{ route('nambo.destroy', $x->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    {{-- @php
                                    dd($x->omset);
                                @endphp --}}
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
