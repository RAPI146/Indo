@extends('layouts.template')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Akun</h1>
    </div>
    <div class="section-body">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                    <p align="right"><a class="btn btn-primary" href="{{ route('akun.create') }}"><i class="fas fa-plus"></i> Akun </a></p>
                    
                  <table class="table table-striped" id="table-1">
                    <thead>                                 
                      <tr>
                        <th> No </th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Password</th>
                        {{-- <th>Level</th>
                        <th>Email</th> --}}
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>  
                    
                      @foreach ($data as $item)
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->name }}</td>
                          <td>{{ $item->email }}</td>
                          <td>{{ $item->password }}</td>
                          {{-- <td>{{ $item->level }}</td>
                          <td>{{ $item->nip }}</td> --}}

                          <td>
                          {{-- <a class="btn btn-success btn-action mr-1" href="" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a> --}}
                          <form action="{{ route('akun.destroy', $item->id) }}"
                            method="post" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-action btn-sm"
                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        <i class="fas fa-trash"></i>
                    </button>
                        </form>
                          </td>
                       </tr>
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
    {{-- @include('sweetalert::alert') --}}
@endsection