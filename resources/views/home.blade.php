@extends('layouts.template')

@section('content')
<script src="{{ asset('dist/assets/page/chart.js') }}"></script>
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            @if (auth()->user()->level === 'petugas')
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jumlah Petugas</h4>
                            </div>
                            <div class="card-body">
                                {{-- {{ $jumlahPetugas }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah User</h4>
                        </div>
                        <div class="card-body">
                            {{-- {{ $jumlahUser }} --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-info">
                        <i class="far fa-calendar"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Tanggal</h4>
                        </div>
                        <div class="card-body">
                            <p id="system-date"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="far fa-clock"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jam</h4>
                        </div>
                        <div class="card-body">
                            <p id="system-time"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        </div>
        </div>
        
        <script>
            function updateTime() {
                const systemTimeElement = document.getElementById('system-time');
                const now = new Date();
                const hours = String(now.getHours()).padStart(2, '0');
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const seconds = String(now.getSeconds()).padStart(2, '0');
                const formattedTime = `${hours} : ${minutes} : ${seconds} WIB`;
                systemTimeElement.innerText = formattedTime;
            }
        
            // Memanggil updateTime setiap 1 detik untuk memperbarui waktu secara real-time
            setInterval(updateTime, 1000);
        
            // Memanggil updateTime saat halaman dimuat pertama kali
            updateTime();
        </script>
        <script>
            function formatDate(date) {
                const day = String(date.getDate()).padStart(2, '0');
                const monthNames = [
                    'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                    'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                ];
                const month = monthNames[date.getMonth()];
                const year = date.getFullYear();
                return `${day} ${month} ${year}`;
            }

            function updateDate() {
                const systemDateElement = document.getElementById('system-date');
                const now = new Date();
                const formattedDate = formatDate(now);
                systemDateElement.innerText = formattedDate;
            }

            // Memanggil updateDate saat halaman dimuat pertama kali
            updateDate();
        </script>
    </section>
@endsection
