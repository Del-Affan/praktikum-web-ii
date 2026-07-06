@extends('layouts.app')

@section('title', 'Home - Portfolio Saya')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">Selamat Datang di Portfolio Saya</h3>
            </div>
            <div class="card-body text-center">
                <h1 class="display-4">👋 Halo!</h1>
                <p class="lead">Selamat datang di halaman portfolio pribadi saya.</p>
                <p>Ini adalah website portfolio yang dibuat menggunakan Laravel dengan Blade Templating.</p>
                <p>Silakan navigasi ke menu di atas untuk melihat informasi lebih lanjut.</p>
                <hr>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5>Profil</h5>
                                <p>Lihat data diri saya</p>
                                <a href="{{ url('/profil') }}" class="btn btn-primary btn-sm">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5>Pendidikan</h5>
                                <p>Riwayat pendidikan saya</p>
                                <a href="{{ url('/pendidikan') }}" class="btn btn-primary btn-sm">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5>Keahlian</h5>
                                <p>Skill yang saya miliki</p>
                                <a href="{{ url('/keahlian') }}" class="btn btn-primary btn-sm">Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection