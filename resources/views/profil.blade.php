@extends('layouts.app')

@section('title', 'Profil - Portfolio Saya')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">Profil Saya</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama</th>
                                <td>{{ $nama }}</td>
                            </tr>
                            <tr>
                                <th>NPM</th>
                                <td>{{ $npm }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><span class="badge bg-success">Mahasiswa Aktif</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($nama) }}&size=150&background=007bff&color=fff" 
                             alt="Avatar" class="rounded-circle img-thumbnail" style="width:150px;height:150px;">
                        <h5 class="mt-3">{{ $nama }}</h5>
                        <p class="text-muted">Mahasiswa Teknik Informatika</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection