@extends('layouts.template')
<link rel="stylesheet" href="{{ asset('css/akun.css') }}">
@section('content')
<section class="section">
<div class="container">
    <div class="title">Tambah Akun</div>
    <div class="content">
        <form action="{{ route('akun.store') }}" method="POST">
            @csrf
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Nama</span>
                    <input type="text" name="name" placeholder="Contoh : Tes" required>
                </div>

                <div class="input-box">
                    <label for="password"></i> Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" pattern=".{8,}" name="password" placeholder="Minimal 8 Digit" required>
                        <i class="fas fa-eye" id="togglePassword"></i>
                    </div>
                </div>
                
               
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" placeholder="Contoh : tes@gmail.com" required>
                </div>
                </div>

            

            <div class="button">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>
</div>


@endsection