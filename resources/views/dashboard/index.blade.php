@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="card small-box mb-3 text-bg shadow" style="background-color: #2F323B;">
            <div class="card-body text-center text-light">
                <h3 class="card-title fw-bolder">{{ $positionCount }}</h3>
                <p class="card-text fw-bold">Data Jabatan</p>
            </div>
            <div class="card-footer text-center" style=" background-color: #607ABD;">
                <a href="{{ route('positions.index') }}" class="text-decoration-none text-light">Lihat Data <span data-feather="arrow-right-circle" class="align-text-bottom"></span></a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="card small-box mb-3 text-bg" style="background-color: #1B2336;">
            <div class="card-body text-center text-light">
                <h3 class="card-title fw-bolder">{{ $userCount }}</h3>
                <p class="card-text fw-bold">Data Karyawan</p>
            </div>
            <div class="card-footer text-center" style=" background-color: #3A4F52;">
                <a href="{{ route('employees.index') }}" class="text-decoration-none text-light">Lihat Data <span data-feather="arrow-right-circle" class="align-text-bottom"></span></a>
            </div>
        </div>
    </div>
</div>
@endsection