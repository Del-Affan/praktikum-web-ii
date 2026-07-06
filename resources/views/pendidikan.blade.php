@extends('layouts.app')

@section('title', 'Pendidikan - Portfolio Saya')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">Riwayat Pendidikan</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-primary">
                            <tr>
                                <th>Kampus</th>
                                <th>Program Studi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>{{ $kampus }}</strong></td>
                                <td>{{ $prodi }}</td>
                                <td><span class="badge bg-success">Aktif</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-4 p-3 bg-light rounded">
                    <h5>Informasi Tambahan:</h5>
                    <ul class="list-unstyled">
                        <li>📚 Semester: 6</li>
                        <li>📅 Tahun Masuk: 2023</li>
                        <li>🎯 IPK: 3.75</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection