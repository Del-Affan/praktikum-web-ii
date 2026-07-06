@extends('layouts.app')

@section('title', 'Keahlian - Portfolio Saya')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">Keahlian Saya</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($skills as $skill)
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card h-100 text-center">
                            <div class="card-body d-flex align-items-center justify-content-center" 
                                 style="min-height: 80px;">
                                <h5 class="mb-0">
                                    <span class="badge bg-primary" style="font-size: 1.2rem;">
                                        {{ $skill }}
                                    </span>
                                </h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <div class="mt-4 p-3 bg-light rounded">
                    <h5>📊 Skill Progress:</h5>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" style="width: 85%;">PHP 85%</div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" style="width: 75%;">Laravel 75%</div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-warning" style="width: 90%;">HTML/CSS 90%</div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-danger" style="width: 80%;">JavaScript 80%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-secondary" style="width: 70%;">MySQL 70%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection